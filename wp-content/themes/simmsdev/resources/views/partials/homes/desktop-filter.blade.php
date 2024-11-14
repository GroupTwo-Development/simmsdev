<div class="hidden lg:block lg:mt-14">
    <div class="container mx-auto">
        <div class="relative flex flex-row justify-between w-full items-center border-t-[1px] border-b-[1px] border-[#0d0515]">
            <div class="flex flex-row justify-between items-center content-center space-x-2 h-[50px]">
                {{-- Location --}}
                <div class="border-r-[1px] border-[#0d0515]">
                   {!! do_shortcode('[facetwp facet="community_qmi_desktop"]') !!}
               </div>
       
               {{-- Price --}}
               <div class="border-r-[1px] border-[#0d0515]">
                   <x-dropdown-select title="Price">
                       <x-slot name="dropdown">
                           {!! facetwp_display('facet', 'price_qmi_desktop') !!}
                       </x-slot>
                   </x-dropdown-select> 
               </div>

                {{-- Beds --}}
                <div class="border-r-[1px] border-[#0d0515]">
                    {!! facetwp_display('facet', 'beds_qmi_desktop') !!}
                </div>

                {{-- Baths --}}
                <div class="border-r-[1px] border-[#0d0515]">
                    {!! facetwp_display('facet', 'baths_qmi_desktop') !!}
                </div>
       
               {{-- sorting --}}
               <div class="border-r-[1px] border-[#0d0515]">
                   {!! facetwp_display( 'facet', 'community_sort' ) !!}
               </div>
            </div>
       
            {{-- Map filter --}}
            <div>
                <button @click="showMap = !showMap" role="button"
                        class="relative h-[50px] flex items-center cursor-pointer px-[8px] lg:px-1 py-[5px] font-[300] text-lg">
                        <span x-text="showMap ? 'Card' : 'Map'"></span>
                        <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>