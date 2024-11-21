
    <section id="overview" class="lg:flex lg:flex-row w-full lg:justify-between lg:items-start">
        {{-- overview content --}}
        <div class="container mx-auto mt-10 mb-5 lg:w-1/2 xl:w-[45%]">
            <div class="container mx-auto">
                <div class="relative w-full">
                    <div class="pb-3">
                        @if ($homes_items['marketing_switch'] == 'yes')
                             <span class="text-primary-green font-semibold tracking[0.15em] uppercase text-sm block mb-2">{{ $homes_items['marketing_text'] }}</span>
                        @endif
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl" aria-describedby="{{ $title }}">{{ $title }}</h1>
                        <span class="text-sm font-[300]">{{ $homes_items['city'] . ', ' . $homes_items['state'] }}</span>
                    </div>

                    {{-- Community spec --}}
                    <div class="md:mr-80 lg:mr-1 2xl:mr-40">
                        @if (isset($homes_items['beds']) || isset($homes_items['baths'] )|| $homes_items['sqft'] || $homes_items['half_baths'])
                            <div class="border-t-[1px] border-simms-gold">
                                <div class="py-3 flex flex-row justify-between sm:justify-start items-center content-center gap-1 sm:gap-14 ">
                                    @if ($homes_items['beds'])
                                        <div class="flex flex-row  md:flex-row lg:flex-row xl:flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') "  alt="beds"/>
                                            <div>
                                                <span class="text-sm font-[500]">{{ ($homes_items['beds']) }}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Beds</span>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($homes_items['baths'] || $homes_items['half_baths'])
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') "  alt="baths"/>
                                            <div>
                                                <span class="text-sm font-[500]">{!! ($homes_items['half_baths'] ) ? ($homes_items['baths'] . '.5') : $homes_items['baths']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Baths</span>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($homes_items['sqft'])
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover " src="@asset('images/size-icon.png') "  alt="sqft"/>
                                            <div>
                                                <span class="text-sm font-[500]">{!! $homes_items['sqft'] !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">SQ FT</span>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endif

                        {{-- stories and garages --}}
                        @if ($homes_items['garages']  || $homes_items['stories'] )
                            <div class="border-t-[1px] border-b-[1px] border-simms-gold py-3">
                                <div class="flex flex-row w-full justify-start items-center content-center gap-10 sm:gap-14">
                                    {{-- Garages --}}
                                    @if ($homes_items['garages'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/garage-icon.png') "  alt="garages"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! $homes_items['garages']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">garages</span>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- Stories --}}
                                    @if ($homes_items['stories'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/stories-icon.png') "  alt="stories"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! $homes_items['stories']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">Stories</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if (isset($associated_floorplans[0]) || isset($associated_community['community'][0]))
                          <div class="border-b-[1px] border-simms-gold">
                            <div class="pb-3 pt-3 flex flex-row justify-start items-center content-center space-x-3">
                              @if (isset($associated_community['community'][0]))
                                <div class="px-3 flex flex-col items-start text-left">

                                  <span class="block font-normal text-sm">Community:</span>
                                  <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $associated_community['community'][0]['permalink'] }}" class="hover:text-simms-gold">{!! $associated_community['community'][0]['title_home'] !!}</a>
                                  </span>
                                </div>
                              @endif

                              @if ($associated_floorplans[0])
                                <div class="px-3 flex flex-col items-start text-left">
                                  <span class="block font-normal text-sm">Floorplan:</span>
                                  <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $associated_floorplans[0]['permalink'] }}" class="hover:text-simms-gold">{!! $associated_floorplans[0]['name'] !!}</a>
                                  </span>
                                </div>
                              @endif
                            </div>
                          </div>
                        @endif

                        @if ($homes_items['downloadable_brochure'] )
                          <div class="border-b-[1px] border-simms-gold">
                            <div class="pb-3 pt-3 flex flex-row justify-start items-center content-center space-x-3">
                              @if ($homes_items['downloadable_brochure'])

                                <div class="px-3 flex flex-row items-start text-left gap-1">
                                  <span class="block font-normal text-sm"><i class="fa-solid fa-file-arrow-down text-primary-green text-lg"></i></span>
                                  <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $homes_items['downloadable_brochure']['url'] }}" class="hover:text-simms-gold">Download Brochure</a>
                                  </span>
                                </div>
                              @endif
                            </div>
                          </div>
                        @endif
                    </div>
                </div>
                {{-- price --}}
                @if ($homes_items['price'])
                    <div class="py-2">
                        <div class="">
                            <div>
                                <span class="font-semibold text-primary-green text-lg block">Priced at {!! App\format_currency($homes_items['price']) !!}</span>
                            </div>
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


