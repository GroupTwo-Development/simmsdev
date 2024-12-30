<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Resources extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-resource',
    ];

    public function with()
    {
        return [
            'introContent' => $this->resourcesContent(),
            'resourcesSectionOne' => $this->resourcesSectionOne(),
            'resourcesSectionTwo' => $this->resourcesSectionTwo(),
        ];
    }
    

    public function resourcesContent()
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

    public function resourcesSectionOne()
    {
        
        $resource_slider = get_field('rfs1_accordion') ?? '';

        return [
            'resource_slider' => $resource_slider,
        ];
    }
    
    public function resourcesSectionTwo()
    {
        
        $resource_slider = get_field('rfs2_accordion') ?? '';

        return [
            'resource_slider' => $resource_slider,
        ];
    }
}