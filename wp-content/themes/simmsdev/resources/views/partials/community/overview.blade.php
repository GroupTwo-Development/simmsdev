
    <section id="overview" class="lg:flex lg:flex-row w-full lg:justify-between lg:items-start">
        {{-- overview content --}}
        <div class="container mx-auto mt-10 mb-5 lg:w-1/2 xl:w-[45%]">
            <div class="container mx-auto">
                <div class="relative w-full">
                    <div class="pb-3">
                        @if ($communities_items['plan_add_marketing_toggle'] == 'yes')
                             <span class="text-primary-green font-semibold tracking[0.15em] uppercase text-sm block mb-2">{{ $communities_items['plan_marketing_headline'] }}</span>
                        @endif
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl">{{ $title }}</h1>
                        <span class="text-sm font-[300]">{{ $communities_items['city'] . ', ' . $communities_items['state'] }}</span>
                    </div>
    
                    {{-- Community spec --}}
                    <div class="md:mr-80 lg:mr-1 2xl:mr-16">
                        @if (isset($floorplan_item['min_beds'] ) || isset($floorplan_item['min_bath']) || isset($communities_items['min_sqft']) || isset($floorplan_item['baths']))
                            <div class="border-t-[1px] border-simms-gold">
                                <div class="py-3 flex flex-row justify-between sm:justify-start items-center content-center gap-1 sm:gap-14 ">
                                    @if (isset($floorplan_item['min_beds']))
                                        <div class="flex flex-row  md:flex-row lg:flex-row xl:flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " /> 
                                            <div>
                                                <span class="text-sm font-[500]">{{ isset($floorplan_item['min_beds']) }}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Beds</span>
                                            </div>
                                        </div>
                                    @endif
                                    @if (isset($floorplan_item['min_bath']) && isset($floorplan_item['max_bath']))
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " /> 
                                            <div>
                                                <span class="text-sm font-[500]">{!! ($floorplan_item['max_beds'] > $floorplan_item['min_beds'] ) ? ($floorplan_item['min_bath'] . '<i class="text-[12px]">+</i>') : $floorplan_item['min_bath']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Baths</span>
                                            </div>
                                        </div>
                                    @endif
                
                                    @if ($communities_items['min_sqft'] &&  $communities_items['max_sqft'] )
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover " src="@asset('images/size-icon.png') " /> 
                                            <div>
                                                <span class="text-sm font-[500]">{!! ($communities_items['max_sqft'] > $communities_items['min_sqft'] ) ? ($communities_items['min_sqft'] . '<i class="text-[12px]">+</i>') : $communities_items['min_sqft'] !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">SQ FT</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                </div>
                            </div>
                        @endif
    
                        {{-- stories and garages --}}
                        @if (isset($floorplan_item['min_garages'] ) || isset($floorplan_item['min_stories']))
                            <div class="border-t-[1px] border-b-[1px] border-simms-gold py-3">
                                <div class="flex flex-row w-full justify-start items-center content-center gap-10 sm:gap-14">
                                    {{-- Garages --}}
                                    @if ($floorplan_item['min_garages'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/garage-icon.png') " /> 
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! ($floorplan_item['max_garages'] > $floorplan_item['min_garages'] ) ? ($floorplan_item['min_garages'] . '<i class="text-[12px]">-</i>' .$floorplan_item['max_garages']  ) : $floorplan_item['min_garages']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">garages</span>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- Stories --}}
                                    @if ($floorplan_item['min_stories'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/stories-icon.png') " /> 
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! ($floorplan_item['max_stories'] > $floorplan_item['min_stories'] ) ? ($floorplan_item['min_stories'] . '<i class="text-[12px]">-</i>' .$floorplan_item['max_stories']  ) : $floorplan_item['min_stories']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">Stories</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- price --}}
                @if ($communities_items['min_price'])
                    <div class="py-2">
                        <div class="">
                            <div>
                                <span class="font-semibold text-primary-green text-lg block">Starting at {!! App\format_currency($communities_items['min_price']) !!}</span>
                            </div>
                        </div>
                    </div>
                @endif
    
                {{-- amenities --}}
                @if ($amenities)
                    <div class="py-2">
                            <ul>
                                @foreach ($amenities as $amenity)
                                    <li class="flex flex-row w-full items-center content-center justify-start text-sm xl:text-base space-x-2 pb-2">
                                        <svg id="Component_46_1" data-name="Component 46 – 1" xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                            <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#cec778"/>
                                        </svg>
                                        <span>{{ $amenity }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        
                    </div>
                @endif
    
                {{-- hours --}}
                @if ($communities_items['hours'])
                    <div class="py-2">
                        <h5 class="text-primary-green font-semibold text-lg">Hours</h5>
                        <div>
                            <span class="font-[300]">{!! $communities_items['hours']  !!}</span>
                        </div>
                    </div>
                @endif
    
                {{-- CTA --}}
                <div class="py-3">
                    <x-contact-form-modal class="bg-white border-[2px] text-[14px] border-[#002829] py-2 hover:bg-simms-gold transition duration-75 ease-in-out">
                        <x-slot name="button_text">
                            SCHEDULE A TOUR
                        </x-slot>
                    </x-contact-form-modal>
                </div>
            </div>
        </div>
    
        {{-- overview gallery --}}
        <div class="lg:w-1/2 xl:w-[55%]">
            @if ($gallery['slider_gallery'])
                <div>
                    <div class="lg:mb-4 xl:mb-2.5">
                        <x-primary-page-gallery :gallery="$gallery['slider_gallery']" />
                    </div>
                </div>
            @endif
        </div>
    </section>


