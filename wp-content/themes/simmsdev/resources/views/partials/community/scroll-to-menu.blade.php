<section id="scroll-to-section" x-data="initScrollToSection()"  class="menu-scroll lg:block top-[90px] lg:top-[90px] xl:top-[105px] left-0 w-full  z-10 transition-transform bg-secondary-green">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <div>
            <x-scroll-to-menu-link href="#overview">
                <x-slot name="title">Overview</x-slot>
            </x-scroll-to-menu-link>


            @if ($communities_items['comm_description'])
                <x-scroll-to-menu-link href="#description">
                    <x-slot name="title">Description</x-slot>
                </x-scroll-to-menu-link>
            @endif
            

            @if ($communities_items['sitemap'])
                <x-scroll-to-menu-link href="#sitemap">
                    <x-slot name="title">Sitemap</x-slot>
                </x-scroll-to-menu-link>
            @endif
           
            @if ($communities_items['point_of_interest'])
                <x-scroll-to-menu-link href="#pointsofinterest">
                    <x-slot name="title">Points of Interest</x-slot>
                </x-scroll-to-menu-link>
            @endif

            @if (!empty($associated_floorplans))
                <x-scroll-to-menu-link href="#floorplans">
                    <x-slot name="title">Floorplans</x-slot>
                </x-scroll-to-menu-link>
            @endif

            @if (!empty($associated_homes['homes']))
                <x-scroll-to-menu-link href="#availablehomes">
                    <x-slot name="title">Quick Move-In Homes</x-slot>
                </x-scroll-to-menu-link>
            @endif

            @if ($communities_items['location'])
                <x-scroll-to-menu-link href="#location">
                    <x-slot name="title">Map & Directions</x-slot>
                </x-scroll-to-menu-link>
            @endif
            
        </div>
    </div>
</section>