@if($aboutUsContent)
    <section id="description">
        {{-- description content --}}
        <div class="bg-primary-green relative pt-14 xl:pt-20 pb-28 lg:pb-40 overflow-hidden">
            <div class="container mx-auto">
                <div class="text-white text-center xl:max-w-screen-lg mx-auto">
                    @if ($aboutUsContent['title'])
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2">{!! $aboutUsContent['sub_title'] !!}</span>
                    @endif
                    @if ($aboutUsContent['title'])
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{!! $aboutUsContent['title']  !!}</h1>
                    @endif
                    @if ($aboutUsContent['description'])
                        <div>
                            {!! $aboutUsContent['description'] !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif

@if ($aboutUsSectionOne)
    <section id="section_one" class="bg-cover object-cover relative lg:mt-36" style="background-image: url('{{ $aboutUsSectionOne['background_image'] }}')">
        <div class="container mx-auto py-10 ">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full lg:-mt-28 xl:-mt-36 lg:mb-10 xl:max-w-screen-lg xl:mx-auto">
                {{-- image content --}}
                @if ($aboutUsSectionOne['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        @php
                        // Get image ID
                        $image_id = $aboutUsSectionOne['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        <div class="h-full w-full section-img">
                            {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                        </div>
                    </div>
                @endif

                {{-- Content Right --}}
                @if ($aboutUsSectionOne['description'])
                    <div class="text-center lg:text-left bg-[#E5EFF0] py-10 md:py-12  px-8 md:px-16 lg:w-1/2">
                        <div>
                            @if ($aboutUsSectionOne['title'])
                                <span class="font-arno_pro_subhead text-sm uppercase tracking-[0.15em] text-primary-green font-semibold block mb-2">{!! $aboutUsSectionOne['sub_title'] !!}</span>
                            @endif

                            @if ($aboutUsSectionOne['title'])
                                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{!! $aboutUsSectionOne['title'] !!}</h2>
                            @endif
        
                        </div>
                        <div>
                            {!! $aboutUsSectionOne['description'] !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

@if($aboutUsSectionTwo)
    <section id="elevations" class="relative object-cover mt-1 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto py-10 lg:py-14">
            {{-- content --}}
            <div class=" flex flex-col lg:flex-row lg:justify-center items-center w-full  xl:max-w-screen-lg xl:mx-auto">
                {{-- content left --}}
                @if ($aboutUsSectionTwo['description'])
                    <div class="text-center lg:text-left bg-white py-10 md:py-12  px-8 md:px-16 lg:w-1/2 relative shadow-lg lg:h-[400px] lg:mx-0 lg:-mr-14 z-10">
                        <div class="lg:h-[300px]">
                            <div class="">
                                @if ($aboutUsSectionTwo['sub_title'])
                                    <span class="font-arno_pro_subhead  text-sm uppercase tracking-[0.15em] text-primary-green font-semibold block mb-2">{!! $aboutUsSectionTwo['sub_title'] !!}</span>
                                @endif
    
                                @if ($aboutUsSectionTwo['title'])
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{!! $aboutUsSectionTwo['title'] !!}</h2>
                                @endif
            
                            </div>
                            <div>
                                {!! $aboutUsSectionTwo['description'] !!}
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Image --}}
                @if ($aboutUsSectionTwo['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        @php
                        // Get image ID
                        $image_id = $aboutUsSectionTwo['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        <div class="h-full w-full section-img">
                            {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

@if ($aboutUsSectionThree)
    <section id="section_one" class="bg-cover bg-primary-green object-cover relative z-40" style="background-image: url('@asset('images/pattern1.png')')">
        <div class="container mx-auto py-10 lg:py-14 xl:py-20">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full xl:max-w-screen-lg xl:mx-auto">
                {{-- image content --}}
                @if ($aboutUsSectionThree['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        @php
                        // Get image ID
                        $image_id = $aboutUsSectionThree['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        <div class="h-full w-full section-img">
                            {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                        </div>
                    </div>
                @endif

                {{-- Content Right --}}
                @if ($aboutUsSectionThree['description'])
                    <div class="text-center lg:text-left bg-simms-gold py-10 md:py-12  px-8 md:px-16 lg:w-1/2">
                        <div>
                            @if ($aboutUsSectionThree['title'])
                                <span class="font-arno_pro_subhead text-sm uppercase tracking-[0.15em] text-[#002829] font-semibold block mb-2">{!! $aboutUsSectionThree['sub_title'] !!}</span>
                            @endif

                            @if ($aboutUsSectionThree['title'])
                                <h2 class="font-arno_pro_subhead font-normal text-white text-3xl md:text-4xl mb-5">{!! $aboutUsSectionThree['title'] !!}</h2>
                            @endif
        
                        </div>
                        <div>
                            {!! $aboutUsSectionThree['description'] !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

@if ($aboutUsSectionFour)
    <section id="section_one" class="bg-cover object-cover relative  xl:h-[400px]" style="background-image: url('{{ $aboutUsSectionFour['background_image'] }}')">
        <div class="container mx-auto pt-10 xl:pt-28">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full  xl:max-w-screen-lg xl:mx-auto z-10 overflow-hidden relative">

                {{-- Content Right --}}
                @if ($aboutUsSectionFour['description'])
                    <div class="text-center lg:text-left bg-secondary-green py-10 md:py-12  px-8 xl:py-10 md:px-16 lg:w-1/2">
                        <div>
                            @if ($aboutUsSectionFour['title'])
                            <span class="font-arno_pro_subhead text-sm uppercase tracking-[0.15em] text-simms-gold font-semibold block mb-2">{!! $aboutUsSectionFour['sub_title'] !!}</span>
                            @endif

                            @if ($aboutUsSectionFour['title'])
                                <h2 class="font-arno_pro_subhead font-normal text-3xl text-white md:text-3xl mb-5">{!! $aboutUsSectionFour['title'] !!}</h2>
                            @endif
        
                        </div>
                        <div class="text-white">
                            {!! $aboutUsSectionFour['description'] !!}
                        </div>
                    </div>
                @endif
                {{-- image content --}}
                @if ($aboutUsSectionFour['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        @php
                        // Get image ID
                        $image_id = $aboutUsSectionFour['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        <div class="h-full w-full section-img">
                            {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif

@if($aboutUsSectionFive)
    <section id="elevations" class="relative object-cover pt-14 xl:pt-56 w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto py-10 lg:py-14">
            {{-- content --}}
            <div class=" flex flex-col lg:flex-row lg:justify-center items-center w-full  xl:max-w-screen-lg xl:mx-auto">
              

                {{-- Image --}}
                @if ($aboutUsSectionFive['image'])
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        @php
                        // Get image ID
                        $image_id = $aboutUsSectionFive['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        @endphp
                        <div class="h-full w-full section-img">
                            {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                        </div>
                    </div>
                @endif

                  {{-- content --}}
                  @if ($aboutUsSectionFive['description'])
                  <div class="text-center lg:text-left bg-white py-10 md:py-12  px-8 md:px-16 lg:w-1/2 relative shadow-lg lg:h-[400px] lg:mx-0 lg:-ml-14 z-10">
                      <div class="lg:h-[410px]">
                          <div class="">
                              @if ($aboutUsSectionFive['sub_title'])
                                <span class="font-arno_pro_subhead uppercase tracking-[0.15em] text-sm text-primary-green font-semibold block mb-2">{!! $aboutUsSectionFive['sub_title'] !!}</span>
                              @endif
  
                              @if ($aboutUsSectionFive['title'])
                                  <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-3xl mb-5">{!! $aboutUsSectionFive['title'] !!}</h2>
                              @endif
          
                          </div>
                          <div>
                              {!! $aboutUsSectionFive['description'] !!}
                          </div>
                      </div>
                  </div>
              @endif
            </div>
        </div>
    </section>
@endif


@if($aboutUsTeam)
    <section id="elevations" class="relative object-cover pt-14  w-full" style="background-image: url('@asset('assets/pattern2.png')')">
        <div class="container mx-auto">
            @if ($aboutUsTeam['title'])
                <div class="text-center pb-5 xl:pb-10">
                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{!! $aboutUsTeam['title'] !!}</h2>
                </div>
            @endif

            {{-- Team --}}
            @if ($aboutUsTeam['team_members'])
                <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
                    @foreach ($aboutUsTeam['team_members'] as $team)
                        <div class="bg-white shadow-lg mb-10">
                            @php
                            // Get image ID
                            $image_id = $team['photo'];
                            
                            // Get the alt text of the image
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            @endphp
                            <div class="team-photo">
                                {!! wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']) !!}
                            </div>
                            <div class="py-5 px-5">
                                <h3 class="font-arno_pro_subhead text-[#534E50] text-2xl">{!! $team['name'] !!}</h3>
                                <span class="text-[#00676d] block mb-2">{!! $team['title'] !!}</span>
                                <div>
                                    {!! $team['bio'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        <div>
    </section>
@endif

<x-find-your-home :findYourHome="$findYourHome" />