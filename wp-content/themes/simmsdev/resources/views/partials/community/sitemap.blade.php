
@if ($communities_items['sitemap'])
{{-- @dd($communities_items['sitemap']) --}}
    <section id="sitemap" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto">
            <div class="py-16 lg:py-16 xl:py-28 flex flex-col justify-center items-center content-center w-full text-center">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Site Map</h2>
                <div class="py-3 group">
                    <a
                        data-fancybox
                        data-src="{{ $communities_items['sitemap']['sizes']['large'] }}"
                        data-caption="{{ ($communities_items['sitemap']['caption']) ? $communities_items['sitemap']['caption'] : '' }}"
                        class="relative block border-2 border-simms-gold shadow-md group-hover:-translate-y-1 duration-300 group-hover:cursor-pointer"
                        >
                        <img src="{{ $communities_items['sitemap']['sizes']['large'] }}" alt="{{ $communities_items['sitemap']['alt'] }}" />
                    </a>
                </div>

               

                @if ($communities_items['sitemap_url'])
                <x-cta-link href="{{ $communities_items['sitemap_url'] }}" class="text-secondary-green border-b-secondary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">{{ __('View Interactive Site Map') }}</x-cta-link>
                @endif
            </div>
        </div>
    </section>
@endif
