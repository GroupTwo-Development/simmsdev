<div class="w-full">
    <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full">
        <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative">
            @if ($homes_items['status']['value'] == 'Sold')
                <img src="@asset('/assets/just-sold.jpg') " class="object-cover transition duration-700 ease-out group-hover:scale-105 bg-cover object-center w-full" alt="{{$gallery['card_image']['alt']}}" />
                @else
                @if($gallery['card_image'])
                    <img src="{{$gallery['card_image']['sizes']['large']}}" class="object-cover transition duration-700 ease-out group-hover:scale-105 bg-cover object-center " alt="{{$gallery['card_image']['alt']}}" />
                @endif
            @endif

            @if ($homes_items['marketing_switch'] == 'yes')
                <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                    <span class="block font-semibold tracking-[0.15em] uppercase">{{ $homes_items['marketing_text'] }}</span>
                </div>
            @endif
        </div>
        <div class="flex flex-col gap-4">
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-6 py-3">
                    <h3 class="text-balance text-xl text-[#534E50] lg:text-xl font-arno_pro_subhead" aria-describedby="{{ $title }}"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="{{ $homes_items['link'] }}">{{ $title }}</a></h3>
                    <span class="text-sm font-[300]">{{ $homes_items['city'] . ', ' . $homes_items['state'] }}</span>
                </div>
            </div>

            @if (isset($associated_floorplans[0]) || isset($associated_community['community'][0]))
                <div class="border-b-[1px] border-simms-gold">
                    <div class="pb-3 flex flex-row justify-start items-center content-center space-x-3">
                        @if (isset($associated_community['community'][0]))
                            <div class="px-3 flex flex-col items-start text-left">

                                <span class="block font-normal text-sm uppercase">Community:</span>
                                <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $associated_community['community'][0]['permalink'] }}" class="hover:text-simms-gold">{!! $associated_community['community'][0]['title_home'] !!}</a>
                                </span>
                            </div>
                        @endif

                        @if (!empty($associated_floorplans[0]))
                            <div class="px-3 flex flex-col items-start text-left">
                                <span class="block font-normal text-sm uppercase">Floorplan:</span>
                                <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $associated_floorplans[0]['permalink'] }}" class="hover:text-simms-gold">{!! $associated_floorplans[0]['name'] !!}</a>
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif


            @if (isset($homes_items['beds']) || isset($homes_items['baths'] )|| $homes_items['sqft'] || $homes_items['half_baths'])
                <div class="border-b-[1px] border-simms-gold">
                    <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                        @if (isset($homes_items['beds']))
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{{ ($homes_items['beds']) }}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">Beds</span>
                                </div>
                            </div>
                        @endif
                        @if (isset($homes_items['baths']) || $homes_items['half_baths'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{!! ($homes_items['half_baths'] ) ? ($homes_items['baths'] . '.5') : $homes_items['baths']  !!}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">Baths</span>
                                </div>
                            </div>
                        @endif

                        @if ($homes_items['sqft'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row gap-2 items-center content-center">
                                <img class="bg-cover object-cover " src="@asset('images/size-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{!! $homes_items['sqft'] !!}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">SQ FT</span>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            @endif


            @if ($homes_items['price'])
                <div>
                    <div class="px-3 pb-3">
                        <div>
                            <span class="font-semibold text-primary-green text-lg block">Priced at {!! App\format_currency($homes_items['price']) !!}</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </article>

</div>
