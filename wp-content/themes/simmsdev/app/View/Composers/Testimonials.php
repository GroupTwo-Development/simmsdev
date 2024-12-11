<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Testimonials extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
          'archive-testimonials',
          'partials.content-testimonials'
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
            'testimonialPage_header' => $this->primaryPageHeader(),
            'testimonialsIntroContent' => $this->testimonialsIntroContent(),
            'featuredTestimonialsContent' => $this->getFeaturedTestimonialsContent(),
            'feature_testimonials' => $this->getFeatureTestimonials(),
            'testimonial_fields' => $this->getTestimonialFields(),
        ];
    }


    public function primaryPageHeader()
    {
        $background_image_testimonials = get_field('background_image_testimonial', 'option') ?? null;
       
        return [
            'background_image_testimonials' => $background_image_testimonials,
            
        ];
    }

    public function testimonialsIntroContent()
    {
        $intro_title = get_field('intro_title_testimonial', 'options') ?? null;
        $intro_sub_title = get_field('sub_title_testimonial', 'option') ?? null;
        $intro_description = get_field('description_testimonial', 'option') ?? null;
     
        return [
            'title' => $intro_title,
            'sub_title' => $intro_sub_title,
            'description' => $intro_description,
        ];
    }

    public function getFeaturedTestimonialsContent()
    {
        $background_image_stwo = get_field('background_image_stwo', 'option') ?? null;
        $sub_title_sectwo = get_field('sub_title_sectwo', 'option') ?? null;
        $title_sectwo = get_field('title_sectwo', 'option') ?? null;
        $featured_image = get_field('featured_image', 'option') ?? null;

        return [
            'bg_image' => $background_image_stwo,
            'sub_title' => $sub_title_sectwo,
            'title' => $title_sectwo,
            'feature_image' => $featured_image,
        ];
    }

    public function getTestimonialFields()
    {
        $name = get_field('name') ?? null;
        $testimonial = get_field('testimonial') ?? null;

        return [
            'name' => $name,
            'testimonial' => $testimonial,
        ];
    }

             /**
     * Get the 2 most recent events ordered by ACF field 'date_of_event'.
     *
     * @return array
     */
    public function getFeatureTestimonials()
    {
        $args = [
            'post_type' => 'testimonials', // Custom post type for events
            'posts_per_page' => -1, // Limit to 2 posts
            'orderby' => 'date', // Order by date
            'order' => 'ASC', // Order ascending (earliest first)
            'tax_query' => [
                [
                    'taxonomy' => 'testimonials_type', // Custom taxonomy for testimonials
                    'field'    => 'slug',
                    'terms'    => 'feature', // Only include testimonials with the 'feature' term
                ],
            ],
        ];
    
        $query = new \WP_Query($args);
        $testimonials = [];
    
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                
                // Fetch the venue group ACF field
                $name = get_field('name');
                $testimonial = get_field('testimonial');
                
               
    
                $testimonials[] = [
                    'title' => get_the_title(),
                    'name' => $name,
                    'testimonial' => $testimonial,
                ];
            }
        }
    
        // Restore original post data
        wp_reset_postdata();
    
        return $testimonials;
    }
}