<div class="relative lg:hidden border-t-[1px] border-b-[1px] border-[#0d0515] h-[55px]">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center content-center w-full gap-2 h-[55px]">
            {{-- mobile  --}}
            <div class="flex flex-row w-full justify-between content-center items-center gap-2 h-full">
                {{-- offcanvas Filter --}}
                <div class="border-r-[1px] border-[#0d0515]">
                    <x-mobile-filter>
                        <x-slot name="content">
                            <div>
                                <div>
                                    {!! do_shortcode('[facetwp facet="areas"]') !!}
                                </div>

                                <div>
                                    {!! facetwp_display('facet', 'price') !!}
                                </div>
                            </div>
                        </x-slot>
                    </x-mobile-filter>
                </div>

                {{-- Sort option --}}
                <div class="border-r-[1px] border-[#0d0515]  h-[50px]">
                    {!! facetwp_display( 'facet', 'community_sort' ) !!}
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


