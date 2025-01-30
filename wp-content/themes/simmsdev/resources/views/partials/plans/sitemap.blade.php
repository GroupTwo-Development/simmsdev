
@if ($plans_items['sitemap'])

    <section id="sitemap" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto">
            <div class="lg:mx-w-screen-lg">
              <div class="py-16 lg:py-16 xl:py-28 flex flex-col justify-center items-center content-center w-full text-center">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Floor Plan</h2>
                
                 <div class="md:max-w-screen-md lg:max-w-screen-md mx-auto">
                    <div class="py-3 group lg:flex lg:flex-row lg:justify-between w-full lg:space-x-6">
                        @foreach($plans_items['sitemap'] as $sitemap)

                          @if ($loop->first)
                              <a
                                data-fancybox="gallery-qmi-sitemap"
                                data-src="{{ $sitemap['sizes']['large'] }}"
                                data-caption="{{ ($sitemap['caption']) ? $sitemap['caption'] : '' }}"
                                class="relative block border-2 border-simms-gold shadow-md group-hover:-translate-y-1 duration-300 group-hover:cursor-pointer mb-10"
                              >
                                <img src="{{ $sitemap['sizes']['large'] }}" alt="{{ $sitemap['alt'] }}" class="h-[350px] md:h-[430px] lg:h-[530px] xl:h-[560px] w-full" />
                              </a>
                          @endif

                          <div style="display:none">
                            <a data-fancybox="gallery-qmi-sitemap" data-src="{{ $sitemap['sizes']['large'] }}" data-thumb="{{ $sitemap['sizes']['medium'] }}"></a>
                          </div>
                        @endforeach
                      </div>

                      @if ($plans_items['interactive_plan'])
                        <x-cta-link href="{{ $plans_items['interactive_plan'] }}" target="_blank" class="text-secondary-green border-b-secondary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">{{ __('View Interactive Plans') }}
                        </x-cta-link>
                      @endif
                  </div>
              </div>
            </div>
        </div>
    </section>
@endif
