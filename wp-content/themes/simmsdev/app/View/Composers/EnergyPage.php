<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class EnergyPage extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-energy',
    ];

    public function with()
    {
        return [
            'energyPageContent' => $this->energyPageContent(),
            'energySectionOne' => $this->energySectionOne(),
            'energySectionTwo' => $this->energySectionTwo(),
            'energySectionThree' => $this->energySectionThree(),
            'energySectionFour' => $this->energySectionFour(),
            // 'aboutUsSectionTwo' => $this->aboutUsSectionTwo(),
            // 'aboutUsSectionThree' => $this->aboutUsSectionThree(),
            // 'aboutUsSectionFour' => $this->aboutUsSectionFour(),
            // 'aboutUsSectionFive' => $this->aboutUsSectionFive(),
            // 'aboutUsTeam' => $this->aboutUsTeam(),
            // 'communities_items' => $this->communityCardItems(),
            // 'floorplan_item' => $this->floorplansItems(),
            // 'associated_homes' => $this->associatedHomes(),
            // 'gallery' => $this->gallery_data(),
            // 'amenities' => $this->community_amenity(),
            // 'video' => $this->video_converter(),
            // 'associated_floorplans' => $this->associatedFloorplans(),
            // 'sales_agent' => $this->saleAgent(),
        ];
    }

    public function energyPageContent()
    {
        $intro_sub_title = get_field('Intro_sub-title') ?? '';
        $intro_title = get_field('intro_title') ?? '';
        $intro_description = get_field('intro_description') ?? '';
        return [
            'sub_title' => $intro_sub_title,
            'title' => $intro_title,
            'description' => $intro_description,
        ];
    }

    public function energySectionOne()
    {
       
        $sub_title = get_field('ees1_sub-title') ?? '';
        $title = get_field('ees1_title') ?? '';
        $description = get_field('ees1_description') ?? '';
        $image = get_field('ees1_image') ?? '';

        return [
            'sub_title' => $sub_title,
            'title' => $title,
            'description' => $description,
            'image' => $image,
        ];
    }

    public function energySectionTwo()
    {
       
        $sub_title = get_field('ees2_sub-title') ?? '';
        $title = get_field('ees2_title') ?? '';
        $description = get_field('ees2_description') ?? '';
        $image = get_field('ees2_image') ?? '';
        $bavground_image = get_field('background_image_ee2') ?? '';

        return [
            'sub_title' => $sub_title,
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'background_image' => $bavground_image,
        ];
    }

    public function energySectionThree()
    {
       
        $sub_title = get_field('ees3_sub-title') ?? '';
        $title = get_field('ees3_title') ?? '';
        $description = get_field('ees3_description') ?? '';
        $image = get_field('ees3_image') ?? '';
        $bavground_image = get_field('background_image_ee3') ?? '';

        return [
            'sub_title' => $sub_title,
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'background_image' => $bavground_image,
        ];
    }

    public function energySectionFour()
    {
       
        $sub_title = get_field('ees4_sub-title') ?? '';
        $title = get_field('ees4_title') ?? '';
        $description = get_field('ees4_description') ?? '';
        $image = get_field('ees4_image') ?? '';
   
        return [
            'sub_title' => $sub_title,
            'title' => $title,
            'description' => $description,
            'image' => $image,
        ];
    }

 

    



   
}