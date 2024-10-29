<?php
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;

class Communities extends Composer
{

    use AcfFields;
    
    protected static $views = [
        'partials.content-communities'
    ];

    public function with()
    {
        return [
            'communities_items' => $this->communityCardItems(),
            'floorplan_item' => $this->floorplansItems(),
            'homes_count' => $this->homesCount(),
            'gallery' => $this->gallery_data()
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

        ];

       
    }

    public function floorplansItems()
    {
        $spec_data__array = [];
        $floorplans = collect(get_field('plans_community_group')['subdivision_plans'] ?? []);

        if($floorplans->isEmpty()) {
            return;
        }else{
           foreach ($floorplans as $floorplan) {
                // Check if $floorplan is an object and has an ID property
                if (is_object($floorplan) && !empty($floorplan->ID)) {
                    // Retrieve bed and bath values for each floorplan
                    $beds = get_field('plan_beds_group', $floorplan->ID) ?? null;
                    $baths = get_field('plan_baths_group', $floorplan->ID) ?? null;
                    $half_bath_group = get_field('plan_half_baths_group', $floorplan->ID) ?? null;

                    // Retrieve bed and bath values for each floorplan
                    $beds = get_field('plan_beds_group', $floorplan->ID);
                    $baths = get_field('plan_baths_group', $floorplan->ID);
                    $half_bath_group = get_field('plan_half_baths_group', $floorplan->ID) ?? null;
                }
            
                // Structure each floorplan's data as an associative array
                $spec_data__array[] = $beds ?? null;
                $spec_data__array[] = $baths ?? null;
                $spec_data__array[] = $half_bath_group ?? null;            
            
            }
        }

        

        sort($spec_data__array);
       // Check if data exists before calculating
        if (!empty(floatval($spec_data__array))) 
        {
            // Calculate min, max, and average values
            $array_item = [
                'min_beds' => collect($spec_data__array)->min('Plan_beds'),
                'max_beds' => collect($spec_data__array)->max('Plan_beds'),
                'min_bath' =>  collect($spec_data__array)->min('plan_full_baths'),
                'max_bath' => collect($spec_data__array)->max('plan_full_baths'),
                'min_half_bath' =>  collect($spec_data__array)->max('plan_half_baths'),
            ];

            return $array_item;
        }
    }

    public function homesCount()
    {
        
        // Retrieve available homes associated with the community
        $homes = collect(get_field('comm_qmi_group')['subdivision_qmi'] ?? []);
         // Return the count of available homes
        return $homes->count();
       
    }
}