<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
         'partials.content-front-page'
    ];

      /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        // Instantiate the Programs composer and get the latest programs
        return [
            'sliders' => $this->BannerSlider(),
            'section_one' => $this->sectionOne(),
            'section_two' => $this->sectionTwo()
        ];
    }

    /**
     * Retrieve the front page slider.
     *
     * @return string
     */

     public function BannerSlider() 
     {
        $slider = get_field('banner_slider') ?? null;

        if(is_null($slider)) {
            return null;
        }
        return $slider;
     }

     public function sectionOne()
     {
        $background_image = get_field('section_background_image') ?? null;
        $section_subtitle = get_field('section_subtitle') ?? null;
        $section_title = get_field('section_title') ?? null;
        $section_cta_link = get_field('section_cta_link') ?? null;
        $section_content = get_field('section_content') ?? null;
        $section_image = get_field('section_image') ?? null;

        return [
            'background_image' => $background_image,
            'section_subtitle' => $section_subtitle,
            'section_title' => $section_title,
            'section_cta_link' => $section_cta_link,
            'section_content' => $section_content,
            'section_image' => $section_image
        ];
     }

     public function sectionTwo()
     {
        $image_left = get_field('image_left') ?? null;
        $sub_title = get_field('sub_title_sec_two') ?? null;
        $title_section = get_field('title_section_two') ?? null;
        $content = get_field('content_sec_two') ?? null;
        $link_sec_two = get_field('link_sec_two') ?? null;
        $image_right = get_field('image_right_sec_two') ?? null;

        return [
            'image_left' => $image_left,
            'sub_title' => $sub_title,
            'title_section' => $title_section,
            'content' => $content,
            'link_sec_two' => $link_sec_two,
            'image_right' => $image_right
        ];
     }
}