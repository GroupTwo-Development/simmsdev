<?php
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;

class Communities extends Composer
{

    use AcfFields;
    
    protected static $views = [
        'partials.content-communities',
        'partials.content-community'
    ];

    public function with()
    {
        return [
            'communities_items' => $this->communityCardItems(),
            'floorplan_item' => $this->floorplansItems(),
            'homes_count' => $this->homesCount(),
            'gallery' => $this->gallery_data(),
            'amenities' => $this->community_amenity()
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

        return [
            'plan_add_marketing_toggle' => $plan_add_marketing_toggle,
            'plan_marketing_headline' => $plan_marketing_headline,
            'name' => get_the_title(),
            'link' => get_the_permalink(),
            'city' => $comm_city,
            'state' => $comm_state,
            'min_sqft' => $comm_min_SqFt,
            'max_sqft' => $comm_max_SqFt,
            'min_price' => $comm_min_price,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'hours' => $hours
        ];

       
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
            // Check if $home is a WP_Post object and has a 'publish' status
            return $plan instanceof \WP_Post && $plan->post_status === 'publish';
        });

        if($publishedPlans->isEmpty()) {
            return;
        }


           foreach ($publishedPlans as $floorplan) {
                // Check if $floorplan is an object and has an ID property
                if (is_object($floorplan) && !empty($floorplan->ID)) {
                    $plan_beds_group = get_field('plan_beds_group', $floorplan->ID) ?? [];
                    $plan_baths_group = get_field('plan_baths_group', $floorplan->ID) ?? [];
                    $half_bath_group = get_field('plan_half_baths_group', $floorplan->ID) ?? [];
                    $plan_garages = get_field('plan_garages', $floorplan->ID);
                    $plan_stories = get_field('plan_stories', $floorplan->ID);
        
                    // Collect bed, bath, garage, and story values if they exist
                    if (!empty($plan_beds_group['Plan_beds'])) $beds[] = $plan_beds_group['Plan_beds'];
                    if (!empty($plan_baths_group['plan_full_baths'])) $baths[] = $plan_baths_group['plan_full_baths'];
                    if (!empty($half_bath_group['plan_half_baths'])) $halfBaths[] = $half_bath_group['plan_half_baths'];
                    if ($plan_garages !== null) $garages[] = $plan_garages;
                    if ($plan_stories !== null) $stories[] = $plan_stories;
                    
                }  
            
        }

         // Calculate min and max values for each attribute using array_filter to exclude null values
            return [
                'min_beds' => !empty($beds) ? min($beds) : null,
                'max_beds' => !empty($beds) ? max($beds) : null,
                'min_bath' => !empty($baths) ? min($baths) : null,
                'max_bath' => !empty($baths) ? max($baths) : null,
                'min_half_baths' => !empty($halfBaths) ? min($halfBaths) : null,
                'max_half_baths' => !empty($halfBaths) ? max($halfBaths) : null,
                'min_garages' => !empty($garages) ? min($garages) : null,
                'max_garages' => !empty($garages) ? max($garages) : null,
                'min_stories' => !empty($stories) ? min($stories) : null,
                'max_stories' => !empty($stories) ? max($stories) : null,
            ];

    }

    public function homesCount()
    {
        
        // Retrieve available homes associated with the community
        $homes = collect(get_field('comm_qmi_group')['subdivision_qmi'] ?? []);

        // Filter homes by checking if each item is a WP_Post object and has 'publish' status
        $publishedHomesCount = $homes->filter(function ($home) {
            // Check if $home is a WP_Post object and has a 'publish' status
            return $home instanceof \WP_Post && $home->post_status === 'publish';
        })->count();

        return $publishedHomesCount;

    }
}