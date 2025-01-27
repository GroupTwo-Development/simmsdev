<section id="scroll-to-section" x-data="initScrollToSection()"  class="menu-scroll lg:block top-[90px] lg:top-[90px] xl:top-[115px] left-0 w-full  z-10 transition-transform bg-secondary-green">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <div>
            <x-scroll-to-menu-link href="#overview">
                <x-slot name="title">Overview</x-slot>
            </x-scroll-to-menu-link>


            @if ($plans_items['description'])
                <x-scroll-to-menu-link href="#description">
                    <x-slot name="title">Description</x-slot>
                </x-scroll-to-menu-link>
            @endif
            

            @if ($plans_items['sitemap'])
                <x-scroll-to-menu-link href="#sitemap">
                    <x-slot name="title">Sitemap</x-slot>
                </x-scroll-to-menu-link>
            @endif
           
            @if ($plans_items['virtual_tour'])
                <x-scroll-to-menu-link href="#virtual-tour">
                    <x-slot name="title">Virtual Tour</x-slot>
                </x-scroll-to-menu-link>
            @endif

            {{-- @if (!empty($associated_floorplans))
                <x-scroll-to-menu-link href="#floorplans">
                    <x-slot name="title">Floorplans</x-slot>
                </x-scroll-to-menu-link>
            @endif --}}

            @if (!empty($associated_homes['homes']))
                <x-scroll-to-menu-link href="#availablehomes">
                    <x-slot name="title">Available Homes</x-slot>
                </x-scroll-to-menu-link>
            @endif

            @if ($plans_items['elevation_photos'])
                <x-scroll-to-menu-link href="#elevations">
                    <x-slot name="title">Elevations</x-slot>
                </x-scroll-to-menu-link>
            @endif

            {{-- @if ($plans_items['location'])
                <x-scroll-to-menu-link href="#location">
                    <x-slot name="title">Map & Directions</x-slot>
                </x-scroll-to-menu-link>
            @endif --}}
            
        </div>
    </div>
</section>