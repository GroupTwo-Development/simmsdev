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
            'footerContent' => $this->getFooterContent(),
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

    public function getFooterContent()
    {
        $logo_footer = get_field('logo_footer', 'option');
        $content_footer = get_field('content_footer', 'option');
        $newsletter_form = get_field('newsletter_form', 'option');
        $multi_logo = get_field('multi_logo', 'option');
        $feature_communities = get_field('feature_communities', 'option');

        return [
            'logo_footer' => $logo_footer,
            'content_footer' => $content_footer,
            'newsletter_form' => $newsletter_form,
            'multi_logo' => $multi_logo,
            'feature_communities' => $feature_communities,
        ];
    }
}