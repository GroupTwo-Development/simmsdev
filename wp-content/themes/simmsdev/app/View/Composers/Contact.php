<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use Exception;

class Contact extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content-contact',
    ];

    public function with()
    {
        return [
            'introContent' => $this->contactInformation(),
        ];
    }

    public function contactInformation()
    {
        $address = get_field('corporate_office') ?? '';
        $phone = get_field('phone') ?? '';
        $fax = get_field('fax') ?? '';
        $title_contact_form = get_field('title_contact_form') ?? '';
        $form_contact = get_field('form_contact') ?? '';
        $business_hours_fields = get_field('business_hours_fields') ?? '';
        $sales_representative = get_field('sales_representative') ?? '';
        $Section_Title = get_field('Section_Title') ?? '';
        return [
            'address' => $address,
            'phone' => $phone,
            'fax' => $fax,
            'title_contact_form' => $title_contact_form,
            'form_contact' => $form_contact,
            'business_hours_fields' => $business_hours_fields,
            'sales_representative' => $sales_representative,
            'Section_Title' => $Section_Title,
        ];
    }

}