<div class="hidden lg:block lg:mt-14">
    <div class="container mx-auto">
        <div class="relative flex flex-row justify-between w-full items-center border-t-[1px] border-b-[1px] border-[#0d0515]">
            <div class="flex flex-row justify-between items-center content-center space-x-2 h-[50px]">
                {{-- Location --}}
                <div class="border-r-[1px] border-[#0d0515]">
                   {!! do_shortcode('[facetwp facet="plan_community"]') !!}
               </div>
       
               {{-- Beds --}}
               <div class="border-r-[1px] border-[#0d0515]">
                {!! facetwp_display('facet', '_plans_beds') !!}
               </div>

                {{-- Bath --}}
                <div class="border-r-[1px] border-[#0d0515]">
                {!! facetwp_display('facet', '_plans_beds') !!}
                </div>


       
               {{-- sorting --}}
               <div class="border-r-[1px] border-[#0d0515]">
                   {!! facetwp_display( 'facet', 'community_sort' ) !!}
               </div>
            </div>
        </div>
    </div>
</div>