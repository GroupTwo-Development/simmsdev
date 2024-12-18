<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Awards extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-awards',
    ];

    public function with()
    {
        return [
            'awardPageContent' => $this->awardPageContent(),
            'awardSectionOne' => $this->awardSectionOne(),
            'awardSectionTwo' => $this->awardSectionTwo(),
            'awardSectionThree' => $this->awardSectionThree(),
        ];
    }

    public function awardPageContent()
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

    public function awardSectionOne()
    {
       
      
        $image = get_field('aas1_image') ?? '';
        $award_slider = get_field('aas1_slider') ?? '';

        return [
            'image' => $image,
            'award_slider' => $award_slider,
        ];
    }

    public function awardSectionTwo()
    {
       
      
        $image = get_field('aas2_image') ?? '';
        $award_slider = get_field('aas2_slider') ?? '';
        $background_image = get_field('background_image_aa_second_two') ?? '';

        return [
            'feature_image' => $image,
            'award_slider' => $award_slider,
            'bg_image' => $background_image,
        ];
    }

    public function awardSectionThree()
    {
       
      
        $image = get_field('aas3_image') ?? '';
        $award_slider = get_field('aas3_slider') ?? '';

        return [
            'image' => $image,
            'award_slider' => $award_slider,
        ];
    }
}