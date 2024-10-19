@if ($sliders)
    <section id="bannerSlider-area" class="bannerSlider-area relative w-full overflow-hidden">
        <div class="swiper bannerSlider h-64 sm:h-72 md:h-96 lg:h-[480px] xl:h-[600px]">
            <div class="swiper-wrapper h-full">
                @foreach ($sliders as $slide)
                    <div class="swiper-slide h-full">
                        <div class="relative h-full">
                            <div class="duration-700 ease-in-out">
                                <img src="{{ $slide['image']}}"  class="absolute block w-full object-cover bg-cover h-full">
                            </div>
                            <div class="absolute inset-0 bg-overlay overflow-hidden h-full"></div> <!-- Overlay with rgba color -->
                            <div class="relative h-full z-10">
                                <div class="container mx-auto h-full">
                                    <div class="bannerSlider-content  flex flex-col justify-center items-center h-full text-center">
                                        <span class="block text-simms-gold uppercase tracking-[0.07em] font-semibold text-sm sm:text-xl mb-2">{{ $slide['slider_subtitle'] }}</span>
                                        <h2 class="bannerSlider-title text-white font-semibold tracking-[0.01em] text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-arno_pro_subhead">{{ $slide['slider_title'] }}</h2>
                                        @if ($slide['slider_link'])
                                            <x-cta-link href="{{ $slide['slider_link']['url'] }}" class="text-white mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">{{ $slide['slider_link']['title'] }}</x-cta-link>
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next bg-white rounded-full h-7 w-7"></div>
            <div class="swiper-button-prev bg-white rounded-full h-7 w-7"></div>
        </div>
    </section>
@endif

@if ($section_one)
    <div class="mt-32  lg:mt-48 relative"></div>
    <section id="section_one" class="bg-cover object-cover min-h-[750px] lg:min-h-[500px] z-0 relative" style="background-image:linear-gradient(rgba(236, 236, 236, 0.251), rgba(234, 234, 234, 0.247)), url('{{ $section_one['background_image'] }}')">
        <div class="relative ">
            
            <div class="container mx-auto">
                <div class="relative">
                    <div class="bg-white shadow-2xl rounded-md  lg:flex lg:flex-row lg:w-full lg:justify-between absolute -top-16 lg:-mt-18">
                        <div class="py-10 px-5 xl:px-10 lg:w-1/2 flex flex-col content-center justify-center">
                            <span class="block font-semibold text-primary-green uppercase tracking-[0.15em] mb-3 text-sm">{{ $section_one['section_subtitle'] }}</span>
                            <h2 class="font-normal text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead xl:pr-16">{{ $section_one['section_title'] }}</h2>
                            <div class="mb-5 xl:pr-14">
                                <p>{{ $section_one['section_content'] }}</p>
                            </div>
    
                            @if ($section_one['section_cta_link'])
                                <div>
                                    <x-cta-link href="{{ $section_one['section_cta_link']['url'] }}" class="text-primary-green border-b-primary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">{{ $section_one['section_cta_link']['title'] }}</x-cta-link>
                                </div>
                            @endif
                        </div>
                        <div class="lg:w-1/2 relative">
                            <div class="w-full h-full right-img relative">
                                @php
                                // Get image ID
                                $image_id = $section_one['section_image'];
                                
                                // Get the alt text of the image
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            @endphp
                            {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endif



@if ($section_two)
    <section class="bg-cover bg-primary-green object-cover" style="background-image: url('@asset('images/pattern1.png')')">
        <div class="container mx-auto py-20">
            <div class="shadow-xl lg:flex lg:flex-row lg:justify-center">
                {{-- image left --}}
                <div class="lg:w-1/4">
                    <div class="w-full h-full section_two_img  left-img relative">
                        @php
                        // Get image ID
                        $image_id = $section_two['image_left'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                    </div>
                </div>
                {{-- Content --}}
                <div class="bg-simms-gold py-10 lg:py-5 md:py-16 px-5 lg:px-8 text-center lg:w-1/2">
                    <div class="flex flex-col justify-center items-center content-center h-full">
                        <span class="block font-semibold text-primary-green uppercase tracking-[0.15em] mb-3 text-sm">{{ $section_two['sub_title'] }}</span>
                        <h2 class="font-normal text-white text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead lg:px-14 text-center">{{ $section_two['title_section'] }}</h2>
                        <div>
                            {!! $section_two['content'] !!}
                        </div>

                        @if ($section_one['section_cta_link'])
                            <div class="mt-5">
                                <x-cta-link href="{{ $section_two['link_sec_two']['url'] }}" class="text-secondary-green border-b-secondary-green mt-3 md:mt-5 hover:text-white transition-all ease-in-out">{{ $section_two['link_sec_two']['title'] }}</x-cta-link>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- image left --}}
                <div class="lg:w-1/4">
                    <div class="w-full h-full section_two_img right-img relative">
                        @php
                        // Get image ID
                        $image_id = $section_two['image_right'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

