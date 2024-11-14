<div class="relative lg:hidden border-t-[1px] border-b-[1px] border-[#0d0515] h-[55px]">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center content-center w-full gap-2 h-[55px]">
            {{-- mobile  --}}
            <div class=" flex flex-row justify-start items-center h-[55px]">
                {{-- offcanvas Filter --}}
                <div class="border-r-[1px] border-[#0d0515]">
                    <x-mobile-filter>
                        <x-slot name="content">
                            <div class="flex flex-col gap-11">
                                <div class="mb-4">
                                    <span class="font-semibold block mb-1">Communities</span>
                                    {!! do_shortcode('[facetwp facet="community_qmi_mobile"]') !!}
                                </div>

                                <div class="mb-4">
                                    <span class="font-semibold block mb-2">Price</span>
                                    {!! do_shortcode('[facetwp facet="price_qmi"]')!!}
                                
                                </div>
                                <div class="mb-4">
                                    <span class="font-semibold block mb-1">Beds</span>
                                    {!! do_shortcode('[facetwp facet="beds_qmi_mobile"]') !!}
                                </div>
                                <div>
                                    <span class="font-semibold block mb-1">Baths</span>
                                    {!! do_shortcode('[facetwp facet="baths_qmi_mobile"]') !!}
                                </div>
                                
                            </div>
                        </x-slot>
                    </x-mobile-filter>
                </div>

                {{-- Sort option --}}
                <div class="border-r-[1px] border-[#0d0515]  h-[55px]">
                    {!! do_shortcode('[facetwp facet="home_sort"]') !!}
                </div>
            </div>
            {{-- Toggle Button for Map and Card --}}
            <div class="">
                <button @click="showMap = !showMap" role="button"
                    class="relative flex items-center cursor-pointer px-[8px] py-[5px] rounded-[3px] font-[300] text-sm">
                    <span x-text="showMap ? 'Card' : 'Map'"></span>
                    <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>


