<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Floorplans extends Composer
{
    use AcfFields;

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        //
       
        'partials.content-plans',
        'partials.content-plan',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            //
            'gallery' => $this->gallery_data(),
            'plans_items' => $this->planCardItems(),
            'plan_communities' => $this->plan_communities(),
            'associated_communities' => $this->associatedCommunity(),
            'associated_homes' => $this->associatedHomes(),

            // 'plan_spec' => $this->plans_spec(),
            // 'communities' => $this->plan_communities(),
            // 'plan_features' => $this->plan_features(),
            'video' => $this->video_converter()
        ];
    }

    public function gallery_data()
    {

        return array(
            'card_image' => collect($this->fields()['plan_photos'])->first() ?? null,
            'slider_gallery' => collect($this->fields()['plan_photos']) ?? null,
        );
    }


    public function planCardItems()
    {
        $plan_sqft = get_field('plan_base_sqft') ?? null;
        $plan_name = get_field('plan_name') ?? null;
        $marketing_headline_switch = get_field('plan_add_marketing_headline') ?? null;

        $marketing_headline_text = get_field('plan_marketing_headline') ?? null;
        $price = get_field('plan_base_price');
        $plan_beds_group = get_field('plan_beds_group') ?? null;
        $beds = $plan_beds_group['Plan_beds'] ?? '';

        $plan_half_baths_group = get_field('plan_half_baths_group') ?? null;

        $plan_half_baths = $plan_half_baths_group['plan_half_baths'] ?? null;


        $plan_baths_group = get_field('plan_baths_group') ?? null;

        $plan_baths = $plan_baths_group['plan_full_baths'] ?? '';



        $global_phone = get_option('builders_hub_phone') ?? null;

        $primary_plan_type = get_field('primary_plan_type') ?? null;

        $plan_description_group = get_field('Plan_description') ?? null;

        $plan_headline = $plan_description_group['plan_headline'] ?? '';
        $plan_description = $plan_description_group['plan_description'] ?? '';
        $interactive_plan = get_field('interactive_plan') ?? null;
        $brochure = get_field('brochure') ?? null;
        $virtual_tour_url = get_field('virtual_tour_url') ?? null;



        // Get Comm Address
        $plan_city = get_field('home_city') ?? null;
        $plan_state = get_field('home_state') ?? null;
        $plan_features = get_field('plan_features_group') ?? null;
        $sitemap = get_field('plans_gallery') ?? null;
        $elevation = get_field('plan_elevation_options') ?? null;
      


        return [
           'title_home' => $plan_name,
            'sqft' => $plan_sqft,
            'marketing_switch' => $marketing_headline_switch,
            'marketing_text' => $marketing_headline_text,
            'price' => (int)$price,
            'beds' => $beds,
            'baths' => $plan_baths,
            'half_baths' => $plan_half_baths,
            'city' => $plan_city,
            'link' => get_the_permalink(),
            'state' => $plan_state,
            'phone' => $global_phone,
            'plan_type' => $primary_plan_type,
            'headline' => $plan_headline,
            'description' => $plan_description,
            'interactive_plan' => $interactive_plan,
            'brochure' => $brochure,
            'virtual_tour' => $virtual_tour_url,
            'garages' => get_field('plan_garages'),
            'stories' => get_field('plan_stories'),
            'features' => $plan_features,
            'sitemap' => $sitemap,
            'elevation_photos' => $elevation,
        ];
    }

    public function plan_communities(): array
    {
        $communities = [];
        $planCommunities = get_field('plan_communities');

        if (!empty($planCommunities)) {
            $communities = array_map(static function ($community) {
                return [
                    'title' => get_the_title($community->ID),
                    'permalink' => get_permalink($community->ID),
                ];
            }, $planCommunities);
        }

        return $communities;
    }

    public function video_converter()
    {
        $plan_video_url = get_field('plan_video_url') ?? null;

        if (!$plan_video_url) {
            return null;
        }

        $parsedURL = parse_url($plan_video_url);
        $host = $parsedURL['host'] ?? '';
        $path = $parsedURL['path'] ?? '';

        // Handle YouTube short URL (youtu.be)
        if ($host === 'youtu.be') {
            $vidID = ltrim($path, '/'); // Extract the video ID
            return [
                'defaultThumb' => 'https://img.youtube.com/vi/' . $vidID . '/maxresdefault.jpg',
                'url' => $plan_video_url,
            ];
        } elseif (strpos($host, 'youtube.com') !== false) {
            // Handle YouTube full URL (youtube.com/watch?v=VIDEO_ID)
            parse_str($parsedURL['query'] ?? '', $queryParams);
            $vidID = $queryParams['v'] ?? null;
            if ($vidID) {
                return [
                    'defaultThumb' => 'https://img.youtube.com/vi/' . $vidID . '/maxresdefault.jpg',
                    'url' => $plan_video_url,
                ];
            }
        } elseif ($host === 'vimeo.com') {
            // Handle Vimeo URL
            $vidID = ltrim($path, '/');
            try {
                $response = file_get_contents("https://vimeo.com/api/v2/video/$vidID.php");
                if ($response !== false) {
                    $xml = unserialize($response);
                    if ($xml && isset($xml[0]['thumbnail_large'], $xml[0]['title'])) {
                        return [
                            'defaultThumb' => $xml[0]['thumbnail_large'],
                            'url' => $plan_video_url,
                            'title' => $xml[0]['title'],
                        ];
                    }
                }
            } catch (Exception $e) {
                error_log("Error fetching Vimeo video data: " . $e->getMessage());
                return null;
            }
        }

        // Return null if URL is not from supported hosts
        return null;
    }

    public function associatedCommunity()
    {
        $asociated_communities = [];

        $communities = collect($this->fields()['plan_communities'] ?? []);

        $publishedCommunities = $communities->filter(function ($community) {
            return $community instanceof \WP_Post && $community->post_status === 'publish';
        });

        foreach ($publishedCommunities as $community) {
           

            // Filter for only published "available homes"
            $plan_available_homes = get_field('plan_available_homes', $community->ID) ?? [];
            $published_homes = is_array($plan_available_homes) 
            ? array_filter($plan_available_homes, function($home) {
                return get_post_status($home->ID) === 'publish';
            }) 
            : [];


            $asociated_communities[] = [
                'title' => get_the_title($community->ID),
                'permalink' => get_permalink( $community->ID ),
                
            ];
        }

        return $asociated_communities;
    }


    public function associatedHomes()
    {
        $associated_homes = [];
        
        // Retrieve available homes associated with the community
        $homes = collect(get_field('plan_available_homes') ?? []);

        // Filter homes by checking if each item is a WP_Post object and has 'publish' status
        $publishedHomes = $homes->filter(function ($home) {
            return $home instanceof \WP_Post && $home->post_status === 'publish';
        });

        // If there are no published homes, return an empty array
        if ($publishedHomes->isEmpty()) {
            return [
                'totalhomes' => 0,
                'homes' => []
            ];
        }

        foreach ($publishedHomes as $home) {
            $home_sqft = get_field('home_sqft', $home->ID);
            $home_name = get_field('home_name', $home->ID);
            $home_announcements_group = get_field('home_announcements_group',  $home->ID);
            $marketing_headline_switch = $home_announcements_group['home_announcements_toggle'] ?? null;

            $home_status = $home->post_status;
            $home_announcements_text_group = get_field('home_announcements_text_group',  $home->ID);
            $marketing_headline_text = $home_announcements_text_group['home_custom_announcements'] ?? null;

            $price = get_field('home_price',  $home->ID);
            $beds = get_field('home_beds',  $home->ID);
            $home_baths = get_field('home_baths', $home->ID);
            $home_city = get_field('home_city', $home->ID);
            $home_state = get_field('home_state', $home->ID);
            $home_half_baths = get_field('home_half_baths', $home->ID);

            $card_image = collect(get_field('photos', $home->ID))->first() ?? null;
            $slider_gallery = collect(get_field('photos', $home->ID))->toArray() ?? [];

            // Filter for only published "available homes"
            
            $assigned_plan_in_community = get_field('home_community', $home->ID) ?? [];

            $published_community = is_array($assigned_plan_in_community) 
            ? array_filter($assigned_plan_in_community, function($plan) {
                return get_post_status($plan->ID) === 'publish';
            }) 
            : [];

            $first_published_community = $published_community[0] ?? null;

            

            $associated_homes[] = [
                'title_home' => $home_name,
                'permalink' => get_the_permalink($home),
                'sqft' => $home_sqft,
                'marketing_switch' => $marketing_headline_switch,
                'marketing_text' => $marketing_headline_text,
                'price' => (int)$price,
                'status' => $home_status,
                'beds' => $beds,
                'baths' => $home_baths,
                'half_baths' => $home_half_baths,
                'city' => $home_city,
                'state' => $home_state,
                'card_image' => $card_image,
                'slider_gallery' => $slider_gallery,
                'assigned_community' => $first_published_community,
                'assigned_plan_permalink' => $first_published_community ? get_permalink($first_published_community->ID) : null,
            ];
        }

        return [
            'totalhomes' => $publishedHomes->count(),
            'homes' => $associated_homes
        ];
    }

}