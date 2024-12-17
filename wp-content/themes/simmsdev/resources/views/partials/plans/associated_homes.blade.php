@if ($associated_homes['homes'])
    <section id="availablehomes" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto">
            <div class="pb-1 lg:pb-5 xl:pb-5  w-full">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl  text-center mb-10 lg:mb-16">Available Homes</h2>
                {{-- content --}}
                <div class="md:flex md:flex-row md:justify-center md:items-start content-center md:flex-wrap  md:gap-2 xl:gap-5 w-full">
                    @foreach ($associated_homes['homes'] as $index => $home)
                   
                        <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full md:w-[49%] lg:w-[32%] {{ $index >= 3 ? ' hidden' : '' }}">
                            <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
                                @if($home['card_image'])
                                    <img src="{{$home['card_image']['sizes']['large']}}" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="{{$home['card_image']['alt']}}" />
                                @endif
                                @if ($home['marketing_switch'] == 'yes')
                                    <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                                        <span class="block text-sm font-semibold tracking-[0.15em] uppercase">{{ $home['marketing_text'] }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="border-b-[1px] border-simms-gold">
                                    <div class="px-6 py-3">
                                        <h3 class="text-balance text-xl text-[#534E50] lg:text-xl font-arno_pro_subhead" aria-describedby="{{ $home['title_home'] }}"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="{{ $home['permalink'] }}">{!! $home['title_home'] !!}</a></h3>
                                        <span class="text-sm font-[300]">{{ $home['city'] . ', ' . $home['state'] }}</span>
                                        
                                    </div>
                                </div>
                                @if ($home['beds'] || $home['baths'] || $home['sqft'] || $home['baths'])
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                                            @if ($home['beds'])
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " /> 
                                                    <div>
                                                        <span class="text-sm font-normal">{{ ($home['beds']) }}</span>
                                                        <span class="text-sm font-normal uppercase ">Beds</span>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($home['baths'] || $home['half_baths'])
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " /> 
                                                    <div>
                                                        <span class="text-sm font-normal">{!! ($home['half_baths']) ? ($home['baths'] . '.5') : $home['baths']  !!}</span>
                                                        <span class="text-sm font-normal uppercase">Baths</span>
                                                    </div>
                                                </div>
                                            @endif
                        
                                            @if ($home['sqft'] )
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover " src="@asset('images/size-icon.png')" /> 
                                                    <div>
                                                        <span class="text-sm font-normal">{!! ($home['sqft'] ) ? ($home['sqft'] ) : '' !!}</span>
                                                        <span class="text-sm font-normal uppercase">SQ FT</span>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                @endif

                                @if ($home['assigned_community'])
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-row items-center gap-1 text-left">
                                            <span class="block font-normal">Community:</span>
                                            <span class="text-sm font-semibold capitalize block">
                                                <a href="{{ $home['assigned_plan_permalink'] }}" class="hover:text-simms-gold">{{ $home['assigned_community']->post_title }}</a>
                                            </span>
                                        </div>
                                    </div>
                                @endif
                        
                        
                                @if ($associated_homes['homes'])
                                    <div>
                                        <div class="px-3 pb-3">
                                            <div>
                                                <span class="font-semibold text-primary-green text-lg block">Priced at {!! App\format_currency($home['price']) !!}</span>
                                            </div>
                                        </div>
                                    </div>
                            
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

                {{-- Load More Button --}}
                @if (count($associated_homes['homes']) > 3)
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