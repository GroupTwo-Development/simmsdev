@if ($featuredTestimonialsContent)
   <section class="relative bg-cover object-cover py-16 inset-0 " style="background-image:url('{{ $featuredTestimonialsContent['bg_image'] }}')">
     <!-- Overlay -->
     <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
        <div class="container mx-auto relative">
            {{-- content --}}
            <div class="relative lg:flex lg:flex-row lg:justify-center lg:items-center w-full">
                {{-- image --}}
                <div class="lg:w-1/2">
                    <div class="h-full  w-full section_three_img relative">
                        @php
                        // Get image ID
                        $image_id = $featuredTestimonialsContent['feature_image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                    </div>
                </div>
                {{-- testimonials --}}
                <div class="bg-[rgba(0,40,41,0.9)] lg:w-1/2 py-12 px-4 lg:py-2 flex flex-col justify-center h-[450px] lg:-ml-16 xl:-ml-20 2xl:-ml-28 z-10">
                    @if($feature_testimonials)
                        <div class="">
                            <span class="text-simms-gold font-semibold tracking-[0.15em] text-center block mb-4">The marketing headline is (42) characters.</span>
                            <h4 class="font-normal text-white text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead lg:px-14 text-center">This headline can be forty 40 characters</h4>
                            <div>
                                <div class="swiper featureTestimonials">
                                    <div class="swiper-wrapper">
                                        @foreach($feature_testimonials as $testimonial)
                                            <div class="swiper-slide">
                                                <div class="sm:px-10 md:px-16">
                                                   <blockquote class="text-white text-center">
                                                        {!! $testimonial['testimonial'] !!}
                                                         <cite>{{ $testimonial['name'] }}</cite>  
                                                   </blockquote>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next bg-white rounded-full h-7 w-7"></div>
                                    <div class="swiper-button-prev bg-white rounded-full h-7 w-7"></div>
                                </div>
                            </div>

                          
                           <div class="text-center mt-5">
                            <x-cta-link href="/testimonials" class="text-white mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out">READ MORE REVIEWS</x-cta-link>
                           </div>
                                       
                        </div>

                    @endif
                </div>
            </div>
        </div>
   </section> 
@endif