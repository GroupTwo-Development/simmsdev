@if ($communities_items['comm_description'])
    <section id="description">
       {{-- description content --}}
       <div class="bg-primary-green relative pt-14 xl:pt-20 pb-28 lg:pb-40 overflow-hidden">
            <div class="container mx-auto">
                <div class="text-white text-center xl:max-w-screen-lg mx-auto">
                    @if ($communities_items['comm_headline'])
                        <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{{ $communities_items['comm_headline'] }}</h2>
                    @endif
                    @if ($communities_items['comm_description'])
                        <div>
                            {!! $communities_items['comm_description'] !!}
                        </div>
                    @endif
                </div>
            </div>
       </div>
       {{-- video  --}}
       @if ($video)
            <div class="-mt-20 lg:-mt-32" style="background-image: url('@asset('assets/pattern2.png')')">
                <div class="container mx-auto">
                    <div class="relative lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-lg lg:mx-auto">
                        <div class="shadow-lg  group">
                            <a href="{{ $video['url'] }}" data-fancybox="video-gallery" data-poster="{{ $video['defaultThumb'] }}"
                            data-sub-html="<h4>Simms Development</h4>" class="relative block border-2 group-hover:-translate-y-1 duration-300">
                            <img alt="" src="{{ $video['defaultThumb'] }}" class="w-full">
        
                            <!-- Centered Play Button -->
                            <div class="absolute inset-0 flex items-center justify-center ">
                                <svg id="Icon_feather-play-circle" class="group-hover:-translate-y-1 group-hover:scale-110 duration-300 group-hover:border-3 group-hover:border-simms-gold rounded-full" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 165.121 165.121">
                                    <path d="M168.121,85.56A82.56,82.56,0,1,1,85.56,3a82.56,82.56,0,0,1,82.56,82.56Z" transform="translate(-3 -3)" fill="#0d0515"/>
                                    <path d="M15,12,84.9,58.6,15,105.2Z" transform="translate(43.425 23.958)" fill="#fff"/>
                                </svg>
                            </div>
                        </a>
                        </div>
                       
                    </div>
                </div>
            </div>
        @endif
    </section>
@endif


