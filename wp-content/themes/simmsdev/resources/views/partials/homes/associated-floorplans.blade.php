@if ($associated_floorplans)
    <section id="floorplans" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto">
            <div class="pb-6 lg:pb-16 xl:pb-20  w-full">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl  text-center mb-10 lg:mb-16">Available FloorPlans</h2>
                {{-- content --}}
                <div class="md:flex md:flex-row md:justify-center md:items-start content-center md:flex-wrap  md:gap-2 xl:gap-5 w-full">
                    @foreach ($associated_floorplans as $index => $plan)
                   
                        <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full md:w-[49%] lg:w-[32%] {{ $index >= 3 ? ' hidden' : '' }}">
                            <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
                                @if($gallery['card_image'])
                                    <img src="{{$gallery['card_image']['sizes']['large']}}" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="{{$gallery['card_image']['alt']}}" />
                                @endif
                                @if ($plan['plan_add_marketing_headline'] == 'yes')
                                    <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                                        <span class="block text-sm font-semibold tracking-[0.15em] uppercase">{{ $plan['plan_marketing_headline'] }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="border-b-[1px] border-simms-gold">
                                    <div class="px-6 py-3.5">
                                        <h3 class="text-balance text-2xl text-[#534E50] lg:text-2xl font-arno_pro_subhead" aria-describedby="{{ $plan['name'] }}"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="{{ $plan['permalink'] }}">{!! $plan['name'] !!}</a></h3>
                                        
                                    </div>
                                </div>
                                @if ($plan['beds'] || $plan['baths'] || $plan['plan_base_sqft'] || $plan['baths'])
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                                            @if ($plan['beds'])
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " /> 
                                                    <div>
                                                        <span class="text-sm font-semibold">{{ ($plan['beds']) }}</span>
                                                        <span class="text-sm font-semibold uppercase ">Beds</span>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($plan['baths'] && $plan['half_baths'])
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " /> 
                                                    <div>
                                                        <span class="text-sm font-semibold">{!! ($plan['half_baths']) ? ($plan['baths'] . '.5') : $plan['baths']  !!}</span>
                                                        <span class="text-sm font-semibold uppercase">Baths</span>
                                                    </div>
                                                </div>
                                            @endif
                        
                                            @if ($plan['plan_base_sqft'] )
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover " src="@asset('images/size-icon.png')" /> 
                                                    <div>
                                                        <span class="text-sm font-semibold">{!! ($plan['plan_base_sqft'] ) ? ($plan['plan_base_sqft'] ) : '' !!}</span>
                                                        <span class="text-sm font-semibold uppercase">SQ FT</span>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                @endif
                        
                        
                                @if ($plan['plan_base_price'])
                                    <div>
                                        <div class="px-3 pb-3">
                                            <div>
                                                <span class="font-semibold text-primary-green text-lg block">Priced at {!! App\format_currency($plan['plan_base_price']) !!}</span>
                                            </div>
                                        </div>
                                    </div>
                            
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

                {{-- Load More Button --}}
                @if (count($associated_floorplans) > 3)
                    <div class="text-center mt-6">
                        <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                            Load More
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

