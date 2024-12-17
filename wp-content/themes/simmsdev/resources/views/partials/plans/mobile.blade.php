<div class="relative lg:hidden border-t-[1px] border-b-[1px] border-[#0d0515] h-[55px]">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center content-center w-full gap-2 h-[55px]">
            {{-- mobile  --}}
            <div class="flex flex-row w-full justify-between content-center items-center gap-2 h-full">
                {{-- offcanvas Filter --}}
                <div class="border-r-[1px] border-[#0d0515] w-2/3">
                    <x-mobile-filter>
                        <x-slot name="content">
                            <div>
                                <div>
                                    {!! do_shortcode('[facetwp facet="_plan_community"]') !!}
                                </div>

                                <div class="mt-5">
                                    {!! facetwp_display('facet', '_beds') !!}
                                </div>

                                <div class="mt-5">
                                    {!! facetwp_display('facet', '_plans_baths') !!}
                                </div>

                                
                            </div>
                        </x-slot>
                    </x-mobile-filter>
                </div>

                {{-- Sort option --}}
                <div class="h-[50px]">
                    {!! facetwp_display( 'facet', 'community_sort' ) !!}
                </div>
            </div>
 
        </div>
    </div>
</div>


