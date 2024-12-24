<?php
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Communities extends Composer
{

    use AcfFields;
    
    protected static $views = [
        'partials.content-communities',
        'partials.content-community',
        'partials.community.scroll-to-menu',
    ];

    public function with()
    {
        return [
            'communities_items' => $this->communityCardItems(),
            'floorplan_item' => $this->floorplansItems(),
            'associated_homes' => $this->associatedHomes(),
            'gallery' => $this->gallery_data(),
            'amenities' => $this->community_amenity(),
            'video' => $this->video_converter(),
            'associated_floorplans' => $this->associatedFloorplans(),
            'sales_agent' => $this->saleAgent(),
        ];
    }

        /**
     * Gallery Data to be passed to view before rendering.
     *
     * @return array
     */
    public function gallery_data()
    {
        return array(
            'card_image' => collect($this->fields()['gallery'])->first(),
            'slider_gallery' => collect($this->fields()['gallery'])
        );
    }

    public function communityCardItems()
    {
        $plan_add_marketing_toggle = get_field('plan_add_marketing_headline') ?? '';
        $plan_marketing_headline = get_field('plan_marketing_headline') ?? '';
        $comm_city = get_field('comm_city') ?? '';
        $comm_state = get_field('comm_state') ?? '';
        $community_sqft_group = get_field('sqft') ?? null;
        $comm_min_SqFt = $community_sqft_group['comm_min_SqFt'] ?? '';
        $comm_max_SqFt = $community_sqft_group['comm_max_sqft'] ?? '';
        $comm_price_group = get_field('comm_price') ?? null;
        $comm_min_price = $comm_price_group['comm_min_price'] ?? '';
        $location_group = get_field('latitude_longitude');
        $latitude = $location_group['latitude'];
        $longitude = $location_group['longitude'];
        $hours = get_field('community_weekly_business_hours') ?? '';

        $comm_description_group = get_field('comm_description_group') ?? null;
        $comm_headline = $comm_description_group['comm_headline'] ?? null;
        $comm_description = $comm_description_group['comm_description'] ?? null;

        $community_map_group = get_field('community_map_group') ?? null;
        $community_map = $community_map_group['community_map'] ?? null;
        $community_map_url = $community_map_group['community_map_url'] ?? null;
        $community_point_of_interest = get_field('community_point_of_interest') ?? null;

        $location_group = get_field('latitude_longitude');
        $latitude = $location_group['latitude'];
        $longitude = $location_group['longitude'];

        $comm_directions_group = get_field('comm_directions_group');

        $Comm_directions_text = $comm_directions_group['Comm_directions_text'];

        $community_coming_soon = get_field('community_coming_soon');
        $coming_coming_soon_swtich = $community_coming_soon['coming_coming_soon'] ?? '';
        $join_the_vip_list = $community_coming_soon['join_the_vip_list'] ?? '';
        $comm_address = get_field('comm_address') ?? '';
        $comm_postal_code = get_field('comm_postal_code') ?? '';
    

        return [
            'plan_add_marketing_toggle' => $plan_add_marketing_toggle,
            'plan_marketing_headline' => $plan_marketing_headline,
            'name' => get_the_title(),
            'link' => get_the_permalink(),
            'address' => $comm_address,
            'city' => $comm_city,
            'state' => $comm_state,
            'postal_code' => $comm_postal_code,
            'min_sqft' => $comm_min_SqFt,
            'max_sqft' => $comm_max_SqFt,
            'min_price' => $comm_min_price,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'hours' => $hours,
            'comm_headline' => $comm_headline,
            'comm_description' => $comm_description,
            'sitemap'   => $community_map,
            'sitemap_url' => $community_map_url,
            'point_of_interest' => $community_point_of_interest,
            'location' => [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ],
            'directions' => $Comm_directions_text,
            'coming_soon_switch' => $coming_coming_soon_swtich,
            'join_the_vip_list' => $join_the_vip_list,
            
       
        ];

       
    }

    // Retrieve the community sales agent
    public function saleAgent()
    {
        $comm_sales_agent_group = get_field('comm_sales_agent_group');
        $subdivision_sales_agent = $comm_sales_agent_group['subdivision_sales_agent'] ?? '';

        if($subdivision_sales_agent){
            foreach ($subdivision_sales_agent as $agent) {
                return array (
                    'agent_title' => get_field('title', $agent->ID),
                    'name'  => get_the_title($agent->ID),
                    'phone' => get_field('phone_number', $agent->ID),
                    'photo' => get_field('agent_image', $agent->ID),
                    'email' => get_field('email', $agent->ID),
                );
            }
        }
    }

    public function community_amenity()
    {
        // Retrieve the subdivision amenities group
        $subdivision_amenities_group = get_field('subdivision_amenities_group');

        // Check if the field exists and is not empty
        if ($subdivision_amenities_group) {
            $amenity_array = [];

            // Loop through each amenity and add it to the array
            foreach ($subdivision_amenities_group as $amenity) {
                $amenity_field = $amenity['subdivision_Amenity'] ?? null;

                // Only add if amenity field is not null
                if ($amenity_field) {
                    $amenity_array[] = $amenity_field;
                }
            }

            // Return the array if it's not empty, otherwise return null
            return !empty($amenity_array) ? $amenity_array : null;
        }

        // Return null if the field doesn't exist or is empty
        return null;
    }

    public function floorplansItems()
    {
        global $post;
        $spec_data__array = [];
    
        $garages = [];
        $stories = [];
        $beds = [];
        $baths = [];
        $halfBaths = [];
        
        $plans_community_group = collect($this->fields()['plans_community_group']);
        $floorplans = collect($plans_community_group['subdivision_plans'] ?? []);
    
        // Filter homes by checking if each item is a WP_Post object and has 'publish' status
        $publishedPlans = $floorplans->filter(function ($plan) {
            return $plan instanceof \WP_Post && $plan->post_status === 'publish';
        });
    
        if ($publishedPlans->isEmpty()) {
            return [];
        }
    
        foreach ($publishedPlans as $floorplan) {
            if (is_object($floorplan) && !empty($floorplan->ID)) {
                $plan_beds_group = get_field('plan_beds_group', $floorplan->ID) ?? [];
                $plan_baths_group = get_field('plan_baths_group', $floorplan->ID) ?? [];
                $half_bath_group = get_field('plan_half_baths_group', $floorplan->ID) ?? [];
                $plan_garages = get_field('plan_garages', $floorplan->ID);
                $plan_stories = get_field('plan_stories', $floorplan->ID);
    
                if (!empty($plan_beds_group['Plan_beds'])) $beds[] = (int) $plan_beds_group['Plan_beds'];
                if (!empty($plan_baths_group['plan_full_baths'])) $baths[] = (int) $plan_baths_group['plan_full_baths'];
                if (!empty($half_bath_group['plan_half_baths'])) $halfBaths[] = (int) $half_bath_group['plan_half_baths'];
                if ($plan_garages !== null) $garages[] = (int) $plan_garages;
                if ($plan_stories !== null) $stories[] = (int) $plan_stories;
            }
        }
    
        // Calculate min and max values for each attribute
        return [
            'min_beds' => !empty($beds) ? min(array_filter($beds)) : null,
            'max_beds' => !empty($beds) ? max(array_filter($beds)) : null,
            'min_bath' => !empty($baths) ? min(array_filter($baths)) : null,
            'max_bath' => !empty($baths) ? max(array_filter($baths)) : null,
            'min_half_baths' => !empty($halfBaths) ? min(array_filter($halfBaths)) : null,
            'max_half_baths' => !empty($halfBaths) ? max(array_filter($halfBaths)) : null,
            'min_garages' => !empty($garages) ? min(array_filter($garages)) : null,
            'max_garages' => !empty($garages) ? max(array_filter($garages)) : null,
            'min_stories' => !empty($stories) ? min(array_filter($stories)) : null,
            'max_stories' => !empty($stories) ? max(array_filter($stories)) : null,
        ];
    }
    

    public function associatedFloorplans()
    {
        $asociated_plans = [];

        $plans_community_group = collect($this->fields()['plans_community_group']);
        $floorplans = collect($plans_community_group['subdivision_plans'] ?? []);

        $publishedFloorplans = $floorplans->filter(function ($floorplan) {
            return $floorplan instanceof \WP_Post && $floorplan->post_status === 'publish';
        });

        foreach ($publishedFloorplans as $floorplan) {
            $plan_beds_group = get_field('plan_beds_group', $floorplan->ID) ?? [];
            $plan_baths_group = get_field('plan_baths_group', $floorplan->ID) ?? [];
            $half_bath_group = get_field('plan_half_baths_group', $floorplan->ID) ?? [];
            
            $card_image = collect(get_field('plan_photos', $floorplan->ID))->first() ?? null;
            $slider_gallery = collect(get_field('plan_photos', $floorplan->ID))->toArray() ?? [];

            // Filter for only published "available homes"
            $plan_available_homes = get_field('plan_available_homes', $floorplan->ID) ?? [];
            $published_homes = is_array($plan_available_homes) 
            ? array_filter($plan_available_homes, function($home) {
                return get_post_status($home->ID) === 'publish';
            }) 
            : [];


            $asociated_plans[] = [
                'name' => get_field('plan_name', $floorplan->ID) ?? null,
                'permalink' => get_the_permalink($floorplan),
                'beds' => $plan_beds_group['Plan_beds'] ?? null,
                'baths' => $plan_baths_group['plan_full_baths'] ?? null,
                'half_baths' => $half_bath_group['plan_half_baths'] ?? null,
                'garages' => get_field('plan_garages', $floorplan->ID) ?? null,
                'stories' => get_field('plan_stories', $floorplan->ID) ?? null,
                'plan_base_sqft' => get_field('plan_base_sqft', $floorplan->ID) ?? null,
                'plan_add_marketing_headline' => get_field('plan_add_marketing_headline', $floorplan->ID) ?? null,
                'plan_marketing_headline' => get_field('plan_marketing_headline', $floorplan->ID) ?? null,
                'plan_base_price' => get_field('plan_base_price', $floorplan->ID) ?? null,
                'card_image' => $card_image,
                'slider_gallery' => $slider_gallery,
                'available_homes' => $published_homes,
            ];
        }

        return $asociated_plans;
    }

    public function associatedHomes()
    {
        $associated_homes = [];
        
        // Retrieve available homes associated with the community
        $homes = collect(get_field('comm_qmi_group')['subdivision_qmi'] ?? []);

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
            
            $assigned_plan_in_home = get_field('home_floorplan', $home->ID) ?? [];

            $published_plan = is_array($assigned_plan_in_home) 
            ? array_filter($assigned_plan_in_home, function($plan) {
                return get_post_status($plan->ID) === 'publish';
            }) 
            : [];

            $first_published_plan = $published_plan[0] ?? null;

            

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
                'assigned_plan' => $first_published_plan,
                'assigned_plan_permalink' => $first_published_plan ? get_permalink($first_published_plan->ID) : null,
            ];
        }

        return [
            'totalhomes' => $publishedHomes->count(),
            'homes' => $associated_homes
        ];
    }


    public function video_converter()
    {
        $home_video_url = get_field('subdivision_video') ?? null;

        if (!$home_video_url) {
            return null;
        }

        $parsedURL = parse_url($home_video_url);
        $host = $parsedURL['host'] ?? '';
        $path = $parsedURL['path'] ?? '';

        // Handle YouTube short URL (youtu.be)
        if ($host === 'youtu.be') {
            $vidID = ltrim($path, '/'); // Extract the video ID
            return [
                'defaultThumb' => 'https://img.youtube.com/vi/' . $vidID . '/maxresdefault.jpg',
                'url' => $home_video_url,
            ];
        } elseif (strpos($host, 'youtube.com') !== false) {
            // Handle YouTube full URL (youtube.com/watch?v=VIDEO_ID)
            parse_str($parsedURL['query'] ?? '', $queryParams);
            $vidID = $queryParams['v'] ?? null;
            if ($vidID) {
                return [
                    'defaultThumb' => 'https://img.youtube.com/vi/' . $vidID . '/maxresdefault.jpg',
                    'url' => $home_video_url,
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
                            'url' => $home_video_url,
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

}