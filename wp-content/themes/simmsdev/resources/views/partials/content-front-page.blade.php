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
                            <div class="absolute inset-0 bg-blackOverlay overflow-hidden h-full"></div> <!-- Overlay with rgba color -->
                            <div class="relative h-full z-10">
                                <div class="container mx-auto h-full">
                                    <div class="bannerSlider-content  flex flex-col justify-center items-center h-full text-center">
                                        <span class="block text-simms-gold uppercase tracking-[0.07em] font-semibold text-sm sm:text-xl lg:text-3xl  mb-2 md:mb-4 lg:mb-5 xl:mb-6">{{ $slide['slider_subtitle'] }}</span>
                                        <h2 class="bannerSlider-title text-white font-[400] font-arno_pro_subhead tracking-[0.01em] text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl lg:mb-4 xl:mb-8">{{ $slide['slider_title'] }}</h2>
                                        @if ($slide['slider_link'])
                                            <x-cta-link href="{{ $slide['slider_link']['url'] }}" class="text-white mt-3 md:mt-5 hover:text-simms-gold hover:border-simms-gold transition-all ease-in-out">{{ $slide['slider_link']['title'] }}</x-cta-link>
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            {{-- <div class="swiper-button-next bg-white rounded-full h-7 w-7"></div>
            <div class="swiper-button-prev bg-white rounded-full h-7 w-7"></div> --}}
        </div>
    </section>
@endif

@if ($section_one)
    <div class="mt-32  lg:mt-48 xl:mt-56 relative"></div>
    <section id="section_one" class="bg-cover object-cover min-h-[750px] lg:min-h-[500px] z-0 relative" style="background-image:linear-gradient(rgba(236, 236, 236, 0.251), rgba(234, 234, 234, 0.247)), url('{{ $section_one['background_image'] }}')">
        <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
        <div class="relative mb-16">
            
            <div class="container mx-auto">
                <div class="relative">
                    <div class="bg-white shadow-2xl rounded-md  lg:flex lg:flex-row lg:w-full lg:justify-between absolute -top-16 lg:-top-32 lg:-mt-18">
                        <div class="py-12 xl:py-12 px-6 lg:px-10 xl:px-14 lg:w-1/2 flex flex-col content-center justify-center">
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
    <section 
        class="bg-cover bg-primary-green bg-repeat object-cover md:bg-contain lg:bg-contain"
        style="background-image: url('@asset('images/pattern1.png')'); background-size: 150%; background-position: center;">
        <div class="container mx-auto py-20 xl:py-28">
            <div class="relative">
                <div class="bg-white shadow-2xl  lg:flex lg:flex-row lg:w-full lg:justify-between">
                   
                    <div class="lg:w-1/2 relative">
                        <div class="w-full h-full right-img relative">
                            @php
                                // Get image ID
                                $image_id = $section_two['section_image'];
                                
                                // Get the alt text of the image
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            @endphp
                            {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                        </div>
                    </div>
                    <div class="py-12 xl:py-12 px-6 lg:px-10 xl:px-14 lg:w-1/2 flex flex-col content-center justify-center">
                        @if ($section_two['sub_title'])
                            <span class="block font-semibold text-primary-green uppercase tracking-[0.15em] mb-3 text-sm">{{ $section_two['sub_title'] }}</span>
                        @endif
                    
                        <h2 class="font-normal text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead xl:pr-16">{{ $section_two['title_section'] }}</h2>
                        <div class="mb-5 xl:pr-14">
                            <p> {!! $section_two['content'] !!}</p>
                        </div>

                        @if ($section_two['link_sec_two'])
                            <div>
                                <x-cta-link href="{{ $section_two['link_sec_two']['url'] }}" class="text-primary-green border-b-primary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">{{ $section_two['link_sec_two']['title'] }}</x-cta-link>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif


@if ($section_three)
   <section class="relative bg-cover object-cover py-16 lg:py-20 xl:py-48 inset-0 " style="background-image:url('{{ $section_three['bg_image'] }}')">
     <!-- Overlay -->
     <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
        <div class="container mx-auto relative">
            {{-- content --}}
            <div class="relative lg:flex lg:flex-row lg:justify-center lg:items-center w-full">
                {{-- image --}}
                <div class="lg:w-1/2 lg:h-[550px] xl:h-[600px]">
                    <div class="h-full  w-full relative home-testimonial_img">
                        @php
                        // Get image ID
                        $image_id = $section_three['feature_image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                    </div>
                </div>
                {{-- testimonials --}}
                <div class="bg-[rgba(0,40,41,0.9)] lg:w-1/2 py-12 px-4 lg:px-12 lg:py-2 flex flex-col justify-center lg:-ml-16 xl:-ml-20 2xl:-ml-28 z-10 lg:h-[400px] xl:h-[500px]">
                    @if($feature_testimonials)
                        <div class="">
                            @if ($feature_testimonials['featured_titles'])
                                <span class="text-simms-gold font-semibold tracking-[0.15em] text-center text-sm uppercase block mb-2">{{ $feature_testimonials['featured_titles']['subtitle'] }}</span>
                            @endif
                           
                            @if ($feature_testimonials['featured_titles'])
                                <h4 class="font-normal text-white text-2xl lg:text-3xl xl:text-3xl mb-3 font-arno_pro_subhead lg:px-8 text-center">{{ $feature_testimonials['featured_titles']['title'] }}</h4>
                            @endif
                           
                            <div>
                                <div class="swiper featureTestimonials">
                                    <div class="swiper-wrapper xl:pb-8">
                                        @foreach($feature_testimonials['testimonials'] as $testimonial)
                                            <div class="swiper-slide">
                                                <div class="sm:px-10 md:px-16 lg:px-0 xl:px-14">
                                                   <blockquote class="text-white text-center">
                                                        {!! $testimonial['testimonial'] !!}
                                                         <cite>{{ $testimonial['name'] }}</cite>  
                                                   </blockquote>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next bg-primary-green rounded-full h-[28px] w-[28px] flex items-center justify-center">
                                        <svg id="Component_47_1" data-name="Component 47 – 1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                            <g id="Group_586" data-name="Group 586" transform="translate(35 34.875) rotate(180)">
                                              <circle id="Ellipse_153" data-name="Ellipse 153" cx="17.5" cy="17.5" r="17.5" transform="translate(0 -0.125)" fill="#CEC778"/>
                                              <path id="Polygon_2" data-name="Polygon 2" d="M8.5,0,17,15H0Z" transform="translate(8 25.875) rotate(-90)" fill="#002829"/>
                                            </g>
                                          </svg>
                                          
                                      </div>
                                    <div class="swiper-button-prev  rounded-full h-7 w-7">
                                        <svg id="Component_48_1" data-name="Component 48 – 1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                            <g id="Group_323" data-name="Group 323" transform="translate(0 0.125)">
                                              <path id="Path_11959" data-name="Path 11959" d="M17.5,0A17.5,17.5,0,1,1,0,17.5,17.5,17.5,0,0,1,17.5,0Z" transform="translate(0 -0.125)" fill="#CEC778"/>
                                              <path id="Polygon_2" data-name="Polygon 2" d="M8.5,0,17,15H0Z" transform="translate(8 25.875) rotate(-90)" fill="#002829"/>
                                            </g>
                                          </svg>
                                    </div>
                                </div>
                            </div>

                          
                           <div class="text-center mt-5">
                            <x-cta-link href="/testimonials" class="text-white mt-3 md:mt-5 hover:text-simms-gold hover:border-simms-gold transition-all ease-in-out">READ MORE REVIEWS</x-cta-link>
                           </div>
                                       
                        </div>

                    @endif
                </div>
            </div>
        </div>
   </section> 
@endif

<x-find-your-home :findYourHome="$findYourHome" />

