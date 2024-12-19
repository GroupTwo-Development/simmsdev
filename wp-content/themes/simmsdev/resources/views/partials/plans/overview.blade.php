
    <section id="overview" class="lg:flex lg:flex-row w-full lg:justify-between lg:items-start">
        {{-- overview content --}}
        <div class="container mx-auto mt-5 mb-5 lg:w-1/2 xl:w-[45%]">
            <div class="container mx-auto">
                <div class="relative w-full">
                    <div class="pb-3">
                        @if ($plans_items['marketing_switch'] == 'yes')
                             <span class="text-primary-green font-semibold tracking[0.15em] uppercase text-sm block mb-2">{{ $plans_items['marketing_text'] }}</span>
                        @endif
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl" aria-describedby="{{ $title }}">{!! $title !!}</h1>
                    </div>

                    {{-- Community spec --}}
                    <div class="md:mr-80 lg:mr-1 2xl:mr-24">
                        @if (isset($plans_items['beds']) || isset($plans_items['baths'] )|| $plans_items['sqft'] || $plans_items['half_baths'])
                            <div class="border-t-[1px] border-simms-gold">
                                <div class="py-3 flex flex-row justify-between sm:justify-start items-center content-center gap-1 sm:gap-14 ">
                                    @if ($plans_items['beds'])
                                        <div class="flex flex-row  md:flex-row lg:flex-row xl:flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') "  alt="beds"/>
                                            <div>
                                                <span class="text-sm font-[500]">{{ ($plans_items['beds']) }}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Beds</span>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($plans_items['baths'] || isset($plans_items['half_baths']))
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') "  alt="baths"/>
                                            <div>
                                                <span class="text-sm font-[500]">{!! ($plans_items['half_baths'] ) ? ($plans_items['baths'] . '.5') : $plans_items['baths']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Baths</span>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($plans_items['sqft'])
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover " src="@asset('images/size-icon.png') "  alt="sqft"/>
                                            <div>
                                                <span class="text-sm font-[500]">{!! $plans_items['sqft'] !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">SQ FT</span>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endif

                        {{-- stories and garages --}}
                        @if (isset($plans_items['garages'] ) || isset($plans_items['stories']) )
                            <div class="border-t-[1px] border-b-[1px] border-simms-gold py-3">
                                <div class="flex flex-row w-full justify-start items-center content-center gap-10 sm:gap-14">
                                    {{-- Garages --}}
                                    @if ($plans_items['garages'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/garage-icon.png') "  alt="garages"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! $plans_items['garages']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">garages</span>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- Stories --}}
                                    @if ($plans_items['stories'])
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="@asset('images/stories-icon.png') "  alt="stories"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]">{!! $plans_items['stories']  !!}</span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">Stories</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif



                        @if ($plans_items['brochure'] )
                          <div class="border-b-[1px] border-simms-gold">
                            <div class="pb-3 pt-3 flex flex-row justify-start items-center content-center space-x-3">
                              @if ($plans_items['brochure'])

                                <div class="px-3 flex flex-row items-start text-left gap-1">
                                  <span class="block font-normal text-sm"><i class="fa-solid fa-file-arrow-down text-primary-green text-lg"></i></span>
                                  <span class="text-sm font-medium capitalize block">
                                    <a href="{{ $plans_items['brochure']['url'] }}" class="hover:text-simms-gold">Download Brochure</a>
                                  </span>
                                </div>
                              @endif
                            </div>
                          </div>
                        @endif

                        @if (!empty($plan_communities))
                            <div class="border-b-[1px] border-simms-gold w-full">
                                <div x-data="{ open: false }" class="inline-flex relative w-full">
                                    <button @click="open = ! open" class="px-3 pb-2 pt-2 w-full flex flex-row justify-between items-center text-white  bg-primary-green">
                                        <span>Where can I find this Plan?</span>
                                        <span class="select-none inset-y-0  flex items-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div x-cloak x-show="open" @click.away="open = false" class="w-full absolute z-50 top-[40px] left-0 bg-white shadow">
                                        @foreach($plan_communities as $comm)
                                            <a href="{{$comm['permalink']}}" class=" block py-1 px-2 cursor-pointer hover:bg-simms-gold">
                                                <span>{{$comm['title']}}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- price --}}
                @if ($plans_items['price'])
                    <div class="py-2">
                        <div class="">
                            <div>
                                <span class="font-semibold text-primary-green text-lg block">Starting at  {!! App\format_currency($plans_items['price']) !!}</span>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- amenities --}}
                @if (!empty($plans_items['features']))
                    <div class="py-2">
                        <ul>
                            @foreach ($plans_items['features'] as $amenity)
                                <li class="flex flex-row w-full items-center content-center justify-start text-sm xl:text-base space-x-2 pb-2">
                                    <svg id="Component_46_1" data-name="Component 46 – 1" xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                        <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#cec778"/>
                                    </svg>
                                    <span>{{ $amenity['plan_feature'] }}</span>
                                </li>
                            @endforeach
                        </ul>
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


