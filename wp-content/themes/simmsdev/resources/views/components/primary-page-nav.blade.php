<div class="sm:max-w-md md:max-w-md lg:max-w-xl mx-auto">
    <div class="container mx-auto">
        <div>
            @if (has_nav_menu('primarp_page_nav'))
                <div class="primary-page-main-nav mt-5 lg:mt-8 mb-5" aria-label="{{ wp_get_nav_menu_name('primarp_page_nav') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'primarp_page_nav',
                        'menu_class' => 'primary-page-nav flex flex-row justify-between items-center space-x-1  relative capitalize tracking-[0.45px]',
                        
                    ]) !!}
                </div>
            @endif
        </div>
    </div>
</div>