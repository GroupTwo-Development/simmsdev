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
            'main_phone_Number' => $this->gloablPhone(),
            'quickLinkHeader' => $this->getQuickLinkHeader(),
            'primaryPageHeader' => $this->primaryPageHeader(),
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

    public function gloablPhone()
    {
        $phone = get_option('builders_hub_phone');
        return [
            'phone' => $phone,
        ];
      
    }

    public function getQuickLinkHeader()
    {
        $section_data = [];
//        $sub_title = get_field('find_your_home_sub-title', 13);
        $title = get_field('find_your_home_title', 13);
        $builders_hub_api_key = get_option('builders_hub_api_key');
        $builders_hub_google_tag_header = get_option('builders_hub_google_tag_header');
        $builders_hub_google_tag_body = get_option('builders_hub_google_tag_body');

        $section_data = array(
//            'subtitle' => $sub_title,
            'title' => $title,
            'api_key' => $builders_hub_api_key,
            'gtm_header' => $builders_hub_google_tag_header,
            'gtm_footer' => $builders_hub_google_tag_body,
            'fb' => get_option('builders_hub_fb'),
            'instagram' => get_option('builders_hub_instagram'),
            'twitter' => get_option('builders_hub_twitter'),
            'youtube' => get_option('builders_hub_youtube'),
            'address1' => get_option('builders_hub_address1'),
            'address2' => get_option('builders_hub_address2'),
            'city' => get_option('builders_hub_city'),
            'state' => get_option('builders_hub_state'),
            'zip' => get_option('builders_hub_zip'),
        );
        return $section_data;
    }

    public function primaryPageHeader()
    {
        $community_title = get_field('title_comm', 'option') ?? null;
        $community_sub_title = get_field('subtitle_comm', 'option') ?? null;
        $community_header_img = get_field('header_image_comm', 'option') ?? null;

        $homes_title = get_field('title_comm_qmi', 'option') ?? null;
        $homes_sub_title = get_field('subtitle_comm_qmi', 'option') ?? null;
        $homes_header_img = get_field('header_image_comm_qmi', 'option') ?? null;


        return [
            'community_title' => $community_title,
            'community_sub_title' => $community_sub_title,
            'community_header_img' => $community_header_img,
            'homes_title' => $homes_title,
            'homes_sub_title' => $homes_sub_title,
            'homes_header_img' => $homes_header_img,
        ];
    }
}