<?php
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Homes extends Composer
{

    use AcfFields;

    protected static $views = [
        'partials.content-homes',
        'partials.content-home',
        'partials.home.scroll-to-menu',
    ];

    public function with()
    {
        return [
            'gallery' => $this->gallery_data(),
            'homes_items' => $this->homeCardItems(),
            'associated_community' => $this->associatedCommunity(),
            // 'associated_homes' => $this->associatedHomes(),
            // 'amenities' => $this->community_amenity(),
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
        $photos = $this->fields()['photos'] ?? []; // Ensure 'photos' exists, default to an empty array if not
    
        return [
            'card_image' => collect($photos)->first(), // Get the first item from the 'photos' array
            'slider_gallery' => collect($photos), // Collect all photos
        ];
    }

    public function homeCardItems()
    {
        $home_sqft = get_field('home_sqft');
        $home_name = get_field('home_name');
        $home_announcements_group = get_field('home_announcements_group');
        $marketing_headline_switch = $home_announcements_group['home_announcements_toggle'];

        $location_group = get_field('home_geolocation_group');
        $latitude = $location_group['home_latitude'];
        $longitude = $location_group['home_longitude'];

        $home_announcements_text_group = get_field('home_announcements_text_group') ?? null;
        $marketing_headline_text = $home_announcements_text_group['home_custom_announcements'] ?? null;

        $price = get_field('home_price');
        $beds = get_field('home_beds');
        $home_baths = get_field('home_baths');
        $home_half_baths = get_field('home_half_baths');
        $home_description_group = get_field('home_description');
        $home_headline = $home_description_group['home_headline'] ?? null;
        $home_description = $home_description_group['home_description'] ?? null;
        $home_floorplans = get_field('home_floorplans') ?? null;
        $interactive_plan = get_field('interactive_plan') ?? null;
        $home_virtual__tour = get_field('home_virtual__tour') ?? null;
        $brochure = get_field('downloadable_brochure') ?? null;
        $global_phone = get_option('builders_hub_phone') ?? null;


        // Get Comm Address
        $home_city = get_field('home_city') ?? null;
        $home_state = get_field('home_state');
        $address = get_field('home_address') ?? null;
        $zipcode = get_field('home_postal_code') ?? null;
        $directions = get_field('home_directions') ?? null;

        $home_status_group = get_field('home_status_group');
        $home_status = $home_status_group['home_status'] ?? null;
        $home_stories = get_field('home_stories') ?? null;
        $home_garages = get_field('home_garages') ?? null;
        $downloadable_brochure = get_field('downloadable_brochure') ?? null;
        $home_description_group = get_field('home_description');
        $home_headline = $home_description_group['home_headline'] ?? null;
        $home_description = $home_description_group['home_description'] ?? null;
        $home_floorplans = get_field('home_floorplans') ?? null;
        $interactive_plan = get_field('interactive_plan') ?? null;
        $home_virtual__tour = get_field('home_virtual__tour') ?? null;
        $elevation_photos = get_field('elevation_photos') ?? null;


        return [
            'title_home' => $home_name,
            'link' => get_the_permalink(),
            'sqft' => $home_sqft,
            'marketing_switch' => $marketing_headline_switch,
            'marketing_text' => $marketing_headline_text,
            'price' => (int)$price,
            'beds' => $beds,
            'baths' => $home_baths,
            'half_baths' => $home_half_baths,
            'city' => $home_city,
            'state' => $home_state,
            'location' => [
                'latitude' => $latitude,
                'longitude' => $longitude,
                'directions' => $directions,
            ],
            'address' => $address,
            'zipcode' => $zipcode,
            'card_image' => collect(get_field('photos'))->first(),
            'slider_gallery' => collect(get_field('photos'))->toArray(),
            'home_headline' => $home_headline,
            'home_description' => $home_description,
            'sitemap' => $home_floorplans,
            'interactive_plan' => $interactive_plan,
            'virtual_tour' => $home_virtual__tour,
            'brochure' => $brochure,
            'phone' => $global_phone,
            'status' => $home_status,
            'stories' => $home_stories,
            'garages' => $home_garages,
            'downloadable_brochure' => $downloadable_brochure,
            'description' => $home_description,
            'headline' => $home_headline,
            'elevation_photos' => $elevation_photos,
        ];

    }

    // Retrieve the community sales agent
    public function saleAgent()
    {

        $qmi_sales_agent = get_field('qmi_sales_agent') ?? '';

        if($qmi_sales_agent){
            foreach ($qmi_sales_agent as $agent) {
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

    public function associatedFloorplans()
    {
        $associatedPlan = collect($this->fields()['home_floorplan']) ?? [];
        $publishedFloorplans = $associatedPlan->filter(function ($floorplan) {
            return $floorplan instanceof \WP_Post && $floorplan->post_status === 'publish';
        });
    
        // Get the first published floorplan
        $firstFloorplan = $publishedFloorplans->first();
    
        if (!$firstFloorplan) {
            return null; // No floorplans found
        }
    
        $plan_beds_group = get_field('plan_beds_group', $firstFloorplan->ID) ?? [];
        $plan_baths_group = get_field('plan_baths_group', $firstFloorplan->ID) ?? [];
        $half_bath_group = get_field('plan_half_baths_group', $firstFloorplan->ID) ?? [];
    
        $card_image = collect(get_field('plan_photos', $firstFloorplan->ID))->first() ?? null;
        $slider_gallery = collect(get_field('plan_photos', $firstFloorplan->ID))->toArray() ?? [];
    
        // Filter for only published "available homes"
        $plan_available_homes = get_field('plan_available_homes', $firstFloorplan->ID) ?? [];
        $published_homes = is_array($plan_available_homes)
            ? array_filter($plan_available_homes, function ($home) {
                return get_post_status($home->ID) === 'publish';
            })
            : [];
    
        return [
            'name' => get_field('plan_name', $firstFloorplan->ID) ?? null,
            'permalink' => get_the_permalink($firstFloorplan),
            'beds' => $plan_beds_group['Plan_beds'] ?? null,
            'baths' => $plan_baths_group['plan_full_baths'] ?? null,
            'half_baths' => $half_bath_group['plan_half_baths'] ?? null,
            'garages' => get_field('plan_garages', $firstFloorplan->ID) ?? null,
            'stories' => get_field('plan_stories', $firstFloorplan->ID) ?? null,
            'plan_base_sqft' => get_field('plan_base_sqft', $firstFloorplan->ID) ?? null,
            'plan_add_marketing_headline' => get_field('plan_add_marketing_headline', $firstFloorplan->ID) ?? null,
            'plan_marketing_headline' => get_field('plan_marketing_headline', $firstFloorplan->ID) ?? null,
            'plan_base_price' => get_field('plan_base_price', $firstFloorplan->ID) ?? null,
            'card_image' => $card_image,
            'slider_gallery' => $slider_gallery,
            'available_homes' => $published_homes,
        ];
    }
    

    public function associatedCommunity()
    {
        // Get the 'home_community' field as a collection
        $associatedCommunity = collect($this->fields()['home_community']) ?? [];
    
        // Find the first community that is a WP_Post object with 'publish' status
        $firstPublishedCommunity = $associatedCommunity->first(function ($community) {
            return $community instanceof \WP_Post && $community->post_status === 'publish';
        });
    
        // If no published community exists, return null
        if (!$firstPublishedCommunity) {
            return null;
        }
    
        // Return data for the first published community
        return [
            'title_home' => get_the_title($firstPublishedCommunity),
            'permalink'  => get_the_permalink($firstPublishedCommunity),
        ];
    }
    


    public function video_converter()
    {
        $home_video_url = get_field('home_video') ?? null;

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