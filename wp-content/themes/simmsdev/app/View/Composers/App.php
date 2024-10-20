<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'findYourHome' => $this->FindYourHome(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function FindYourHome()
    {
        $title = get_field('title', 'option');
        $sub_title = get_field('sub_title', 'option');
        $find_your_home = get_field('find_your_home', 'option');

        return [
            'title' => $title,
            'sub_title' => $sub_title,
            'find_your_home' => $find_your_home,
        ];
    }
}