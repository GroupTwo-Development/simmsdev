@if ($homes_items['elevation_photos'])
<section id="elevations" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
    <div class="container mx-auto ">

        <div class="flex flex-col justify-center items-center content-center  py-16 lg:py-16 xl:py-28">
            <div>
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Elevations</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 md:gap-2 py-3">
                @foreach($homes_items['elevation_photos'] as $elevation)
                    <div class="relative mb-4 md:mb-0">
                        <a href="{{ $elevation['sizes']['large'] }}" data-fancybox="elevations" class="relative block overflow-hidden h-[250px] lg:h-[200px]">
                            <img alt="{{ $elevation['alt'] }}" src="{{ $elevation['sizes']['medium'] }}" class="w-full h-full" />
                            <div class="absolute bottom-0 left-0 h-full w-full bg-secondary-green bg-opacity-90 text-white text-center py-2 flex flex-col justify-center items-center">
                                <i class="fa-solid fa-plus text-xl"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endif
