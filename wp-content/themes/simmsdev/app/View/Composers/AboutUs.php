<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class AboutUs extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-about',
    ];

    public function with()
    {
        return [
            'aboutUsContent' => $this->aboutUsContent(),
            'aboutUsSectionOne' => $this->aboutUsSectionOne(),
            'aboutUsSectionTwo' => $this->aboutUsSectionTwo(),
            'aboutUsSectionThree' => $this->aboutUsSectionThree(),
            'aboutUsSectionFour' => $this->aboutUsSectionFour(),
            'aboutUsSectionFive' => $this->aboutUsSectionFive(),
            'aboutUsTeam' => $this->aboutUsTeam(),
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

    public function aboutUsContent()
    {
        $intro_sub_title = get_field('intro_sub-title') ?? '';
        $intro_title = get_field('intro_title') ?? '';
        $intro_description = get_field('intro_description') ?? '';
        return [
            'sub_title' => $intro_sub_title,
            'title' => $intro_title,
            'description' => $intro_description,
        ];
    }

    public function aboutUsSectionOne()
    {
        $background_image_sec_one = get_field('background_image_sec_one') ?? '';
        $award_slider = get_field('aas1_slider_about') ?? '';

        return [
            'background_image' => $background_image_sec_one,
            'award_slider' => $award_slider,
        ];
    }

    public function aboutUsSectionTwo()
    {
        $aus2_sub_title = get_field('aus2_sub-title') ?? '';
        $aus2_title = get_field('aus2_title') ?? '';
        $aus2_description = get_field('aus2_description') ?? '';
        $aus2_image = get_field('aus2_image') ?? '';

        return [
            'sub_title' => $aus2_sub_title,
            'title' => $aus2_title,
            'description' => $aus2_description,
            'image' => $aus2_image, 
        ];
    }

    public function aboutUsSectionThree()
    {
        $aus3_sub_title = get_field('aus3_sub-title') ?? '';
        $aus3_title = get_field('aus3_title') ?? '';
        $aus3_description = get_field('aus3_description') ?? '';
        $aus3_image = get_field('aus3_image') ?? '';

        return [
            'sub_title' => $aus3_sub_title,
            'title' => $aus3_title,
            'description' => $aus3_description,
            'image' => $aus3_image, 
        ];
    }

    public function aboutUsSectionFour()
    {
        $background_image_sec_four = get_field('background_image_sec_four') ?? '';
        $aus4_sub_title = get_field('aus4_sub-title') ?? '';
        $aus4_title = get_field('aus4_title') ?? '';
        $aus4_description = get_field('aus4_description') ?? '';
        $aus4_image = get_field('aus4_image') ?? '';

        return [
            'sub_title' => $aus4_sub_title,
            'title' => $aus4_title,
            'description' => $aus4_description,
            'image' => $aus4_image, 
            'background_image' => $background_image_sec_four,
        ];
    }

    public function aboutUsSectionFive()
    {
        $aus5_sub_title = get_field('aus5_sub-title') ?? '';
        $aus5_title = get_field('aus5_title') ?? '';
        $aus5_description = get_field('aus5_description') ?? '';
        $aus5_image = get_field('aus5_image') ?? '';

        return [
            'sub_title' => $aus5_sub_title,
            'title' => $aus5_title,
            'description' => $aus5_description,
            'image' => $aus5_image, 
        ];
    }

    public function aboutUsTeam()
    {
        $section_title_team = get_field('section_title_team') ?? '';
        $team_members = get_field('team_members') ?? [];

        return [
            'title' => $section_title_team,
            'team_members' => $team_members,
        ];
    }
}