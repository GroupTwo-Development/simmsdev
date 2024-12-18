@if($awardPageContent)
    <section id="description">
        {{-- description content --}}
        <div class="bg-light-green relative pt-14 xl:pt-20 lg:pt-16 pb-16 lg:pb-24 overflow-hidden text-black">
            <div class="container mx-auto">
                <div class="text-center xl:max-w-screen-lg mx-auto lg:pt-12">
                    @if ($awardPageContent['title'])
                        <span class="text-[#00676d]text-sm uppercase font-semibold tracking-[0.06em] block mb-2">{!! $awardPageContent['sub_title'] !!}</span>
                    @endif
                    @if ($awardPageContent['title'])
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5 text-[#002829]">{!! $awardPageContent['title']  !!}</h1>
                    @endif
                    @if ($awardPageContent['description'])
                        <div>
                            {!! $awardPageContent['description'] !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif



@if ($awardSectionOne)
    <section id="elevations" class="relative object-cover w-full award-section-one py-10 lg:py-20" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto relative">
            <div class="relative bg-white shadow-md lg:flex lg:flex-row lg:justify-center lg:items-center w-full ">
                {{-- Testimonials Section --}}
                <div class="lg:w-1/2 py-5 px-4 lg:py-2 flex flex-col justify-center lg:h-[450px] z-10">
                    @if($awardSectionOne['award_slider'])
                    <div>
                        <div class="swiper testimonial-swiper">
                            <div class="swiper-wrapper py-20">
                                @foreach($awardSectionOne['award_slider'] as $slide)
                                <div class="swiper-slide">
                                    <div class="sm:px-10 md:px-16">
                                        <span class="text-simms-lime text-[18px] text-center block mb-4">{!! $slide['aas1_sub-title'] !!}</span>
                                        <h4 class="font-normal text-primary-green text-2xl lg:text-2xl mb-3 lg:mb-6 font-arno_pro_subhead lg:px-14 text-center">{!! $slide['aas1_title'] !!}</h4>
                                        <div class="text-center lg:pt-4 px-12">
                                            {!! $slide['aas1_description'] !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next bg-secondary-green rounded-full h-7 w-7"></div>
                            <div class="swiper-button-prev bg-secondary-green rounded-full h-7 w-7"></div>
                        </div>
                    </div>
                    @endif
                </div>
                {{-- Image Section --}}
                <div class="lg:w-1/2">
                    <div class="swiper lg:h-[450px] w-full  relative image-swiper flex flex-col">
                        <div class="swiper-wrapper">
                            @foreach($awardSectionOne['award_slider'] as $slide)
                            <div class="swiper-slide flex justify-center items-center">
                                @php
                                $image_id = $slide['aas1_image'];
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                @endphp
                                {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif


@if ($awardSectionTwo)
   <section class="relative bg-cover object-cover py-16 lg:py-20 xl:py-28 inset-0 award-section-two" style="background-image:url('{{ $awardSectionTwo['bg_image'] }}')">
     <!-- Overlay -->
     <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
        <div class="container mx-auto relative">
            {{-- content --}}
            <div class="relative lg:flex lg:flex-row lg:justify-center lg:items-center w-full h-full">
                {{-- image --}}
                <div class="lg:w-1/2 bg-white shadow-md  flex justify-center items-center lg:h-[450px]">
                    <div class="swiper image-swiper-two w-full h-full">
                        <div class="swiper-wrapper">
                            @foreach($awardSectionTwo['award_slider'] as $slide)
                                <div class="swiper-slide flex justify-center items-center">
                                    <div class="w-full h-full flex justify-center items-center">
                                        @php
                                            $image_id = $slide['aas2_image'];
                                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                        @endphp
                                        {!! wp_get_attachment_image($image_id, 'large', false, [
                                            'alt' => $image_alt, 
                                            'class' => 'max-w-full max-h-full object-contain'
                                        ]) !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- testimonials --}}
                <div class="bg-[rgba(0,40,41,0.9)] lg:w-1/2 py-12 lg:py-6 px-4  flex flex-col justify-center lg:h-[350px] lg:-ml-16 xl:-ml-20 2xl:-ml-28 z-10">
                    @if($awardSectionOne['award_slider'])
                        <div>
                            <div>
                                <div class="swiper testimonial-swiper-two">
                                    <div class="swiper-wrapper py-20 lg:py-6 xl:py-10">
                                        @foreach($awardSectionTwo['award_slider'] as $slide)
                                            <div class="swiper-slide">
                                                <div class="sm:px-10 md:px-16 lg:-mt-5">
                                                    <span class="text-simms-gold text-[18px] text-center block mb-1">{!! $slide['aas2_sub-title'] !!}</span>
                                                    <h4 class="font-normal text-white text-2xl lg:text-2xl  mb-3 lg:mb-6 font-arno_pro_subhead lg:px-14 text-center">{!! $slide['aas2_title'] !!}</h4>
                                                    <div class="text-center lg:pt-4 text-white font-normal">
                                                        {!! $slide['aas2_description'] !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next bg-simms-gold rounded-full h-7 w-7"></div>
                                    <div class="swiper-button-prev bg-simms-gold rounded-full h-7 w-7"></div>
                                </div>
                            </div>        
                        </div>
                    @endif
                </div>
            </div>
        </div>
   </section> 
@endif


@if ($awardSectionThree)
    <section id="section_one" class="bg-cover bg-primary-green object-cover relative z-40 award-section-three" style="background-image: url('@asset('images/pattern1.png')')">
        <div class="container mx-auto py-10 lg:py-14 xl:py-20">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full xl:max-w-screen-xl xl:mx-auto">

                     {{-- Content Right --}}
                     @if ($awardSectionThree['award_slider'])
                     <div class="text-center lg:text-left bg-simms-gold py-10 md:py-12 px-8 md:px-10 lg:px-8 lg:w-1/2">
                         @if($awardSectionThree['award_slider'])
                         <div class="">
                             <div>
                                 <div class="swiper testimonial-swiper-three">
                                     <div class="swiper-wrapper py-20">
                                         @foreach($awardSectionThree['award_slider'] as $slide)
                                             <div class="swiper-slide">
                                                 <div class="sm:px-10 md:px-16">
                                                     <span class="text-secondary-green text-[18px]  uppercase text-center block mb-1">{!! $slide['aas3_sub-title'] !!}</span>
                                                     <h4 class="font-normal text-white text-2xl lg:text-2xl  mb-3 lg:mb-6 font-arno_pro_subhead lg:px-14 text-center">{!! $slide['aas3_title'] !!}</h4>
                                                     <div class="text-center lg:pt-4 text-white font-normal">
                                                         {!! $slide['aas3_description'] !!}
                                                     </div>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                     <div class="swiper-pagination"></div>
                                     <div class="swiper-button-next bg-secondary-green rounded-full h-7 w-7"></div>
                                     <div class="swiper-button-prev bg-secondary-green rounded-full h-7 w-7"></div>
                                 </div>
                             </div>        
                         </div>
                     @endif
                     </div>
                 @endif

                {{-- image content --}}
                @if ($awardSectionThree['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <div class="swiper lg:h-[450px] w-full  relative  flex flex-col image-swiper-three">
                            <div class="swiper-wrapper">
                                @foreach($awardSectionThree['award_slider'] as $slide)
                                <div class="swiper-slide flex justify-center items-center">
                                    @php
                                    $image_id = $slide['award_image'];
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                    @endphp
                                    {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

           
            </div>
        </div>
    </section>
@endif

<x-find-your-home :findYourHome="$findYourHome" />