<div class="w-full">
    <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full">
        <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
            @if (!empty($gallery['card_image']))
                <a href="{{ $communities_items['link'] }}">
                    <img src="{{$gallery['card_image']['sizes']['large']}}" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="{{$gallery['card_image']['alt']}}" />
                </a>
            @endif
            @if ($communities_items['plan_add_marketing_toggle'] == 'yes')
                <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                    <span class="block font-semibold tracking-[0.15em] uppercase">{{ $communities_items['plan_marketing_headline'] }}</span>
                </div>
            @endif
        </div>
        <div class="flex flex-col gap-4">
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-6 py-3">
                    <h3 class="text-balance text-2xl text-[#534E50] lg:text-2xl font-arno_pro_subhead" aria-describedby="{{ $title }}"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="{{ $communities_items['link'] }}">{{ $title }}</a></h3>
                    <span class="text-sm font-[300]">{{ $communities_items['city'] . ', ' . $communities_items['state'] }}</span>
                </div>
            </div>

            
            @if (isset($floorplan_item['min_beds']) || isset($floorplan_item['min_bath'] )|| $communities_items['min_sqft'] || $floorplan_item['baths'])
                <div class="border-b-[1px] border-simms-gold">
                    <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                        @if ($floorplan_item['min_beds'] || $floorplan_item['max_beds'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " /> 
                                <div>
                                    
                                    <span class="text-sm font-semibold">{!! ($floorplan_item['max_beds'] > $floorplan_item['min_beds']) ? ($floorplan_item['min_beds'] . '<i class="text-[12px]">-</i>' . $floorplan_item['max_beds']) : $floorplan_item['min_beds']  !!}</span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Beds</span>
                                </div>
                            </div>
                        @endif
                        @if ($floorplan_item['min_bath'] && $floorplan_item['max_bath'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " /> 
                                <div>
                                    <span class="text-sm font-semibold">{!! ($floorplan_item['max_bath'] > $floorplan_item['min_bath'] ) ? ($floorplan_item['min_bath'] . '<i class="text-[12px]">+</i>') : $floorplan_item['min_bath']  !!}</span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Baths</span>
                                </div>
                            </div>
                        @endif
    
                        @if ($communities_items['min_sqft'] &&  $communities_items['max_sqft'] )
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row gap-2 items-center content-center">
                                <img class="bg-cover object-cover " src="@asset('images/size-icon.png') " /> 
                                <div>
                                    <span class="text-sm font-semibold">{!! ($communities_items['max_sqft'] > $communities_items['min_sqft'] ) ? ($communities_items['min_sqft'] . '<i class="text-[12px]">+</i>') : $communities_items['min_sqft'] !!}</span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">SQ FT</span>
                                </div>
                            </div>
                        @endif
                        
                    </div>
                </div>
            @endif
    

      
            @if ($associated_homes['totalhomes'])
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-3 pb-3 flex flex-row items-center gap-1.5">
                    <div class="bg-primary-green text-white h-[28px] w-[28px] flex flex-col justify-center items-center">
                        <span class="block font-semibold p-1">{!! $associated_homes['totalhomes'] !!}</span>
                    </div>
                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Move-In Ready Homes</span>
                </div>
            </div>
            @endif
    
            @if ($communities_items['min_price'])
                <div>
                    <div class="px-3 pb-3">
                        <div>
                            <span class="font-semibold text-primary-green text-lg block">Starting at {!! App\format_currency($communities_items['min_price']) !!}</span>
                        </div>
                    </div>
                </div>
           
            @endif
        </div>
    </article>

</div>