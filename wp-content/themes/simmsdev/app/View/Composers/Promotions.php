<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Promotions extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-promotions',
      
    ];


    public function with()
    {
        return [
           
            'resourcesSectionThree' => $this->resourcesSectionThree(),

        ];
    }


    public function resourcesSectionThree()
    {
        
        $resource_slider = get_field('rfs3_offers_items') ?? '';
        return [
            'resource_slider' => $resource_slider,
        ];
    }
}