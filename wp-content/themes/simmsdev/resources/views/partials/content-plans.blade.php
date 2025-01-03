<div class="w-full">
    <article class="group flex flex-col  bg-white shadow-md mb-8 w-full">
        <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
            @if (!empty($gallery['card_image']))
                <img src="{{$gallery['card_image']['sizes']['large']}}" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="{{$gallery['card_image']['alt']}}" />
            @endif

      
            @if ($plans_items['marketing_switch'] == 'yes')
                <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                    <span class="block font-semibold tracking-[0.15em] uppercase">{{ $plans_items['marketing_text'] }}</span>
                </div>
            @endif

          
        </div>
        <div class="flex flex-col">
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-6 py-3">
                    <h3 class="text-balance text-2xl text-[#534E50] lg:text-xl font-arno_pro_subhead mt-1" aria-describedby="{!! $title !!}"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="{{ $plans_items['link'] }}">{!! $title !!}</a></h3>
                    
                </div>
            </div>

            
            @if (isset($plans_items['beds']) || isset($plans_items['baths'] )|| $plans_items['sqft'] || $plans_items['half_baths'])
                <div class="border-b-[1px] border-simms-gold pt-3">
                    <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                        @if (isset($plans_items['beds']))
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bbeds-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{{ ($plans_items['beds']) }}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">Beds</span>
                                </div>
                            </div>
                        @endif
                        @if (isset($plans_items['baths']) || $plans_items['half_baths'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="@asset('images/bathroom-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{!! ($plans_items['half_baths'] ) ? ($plans_items['baths'] . '.5') : $plans_items['baths']  !!}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">Baths</span>
                                </div>
                            </div>
                        @endif

                        @if ($plans_items['sqft'])
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row gap-2 items-center content-center">
                                <img class="bg-cover object-cover " src="@asset('images/size-icon.png') " />
                                <div>
                                    <span class="text-sm font-medium">{!! $plans_items['sqft'] !!}</span>
                                    <span class="text-sm font-medium uppercase tracking-[0.06em]">SQ FT</span>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            @endif
    
            @if(!empty($plan_communities))
                <div x-data="{ open: false }" class="inline-flex relative">
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
            @endif
        </div>
    </article>
</div>