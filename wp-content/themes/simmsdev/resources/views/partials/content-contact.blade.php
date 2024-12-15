<div class="relative object-cover w-full pt-10 pb-5  lg:pt-20" style="background-image: url('@asset('images/pattern2.png')')">
    {{-- wrapper --}}
    <div class="container mx-auto">
        {{-- section --}}
        <section class="lg:flex lg:flex-row lg:justify-center  lg:items-start w-full">
            {{-- Left --}}
            <div class="lg:w-2/6">
                {{-- corporate office --}}
                @if ($introContent['address'])
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Simms Development Corporate Office</h2>
                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($introContent['address']) }}" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="underline font-[500]"
                        >
                            {!! $introContent['address']  !!}
                        </a>
                    </div>
                @endif

                @if ($introContent['business_hours_fields'])
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Business Hours</h2>
                        <p class="font-[300]">{!! $introContent['business_hours_fields']  !!}</p>
                    </div>
                @endif

                @if ($introContent['phone'] || $introContent['fax'])
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Office</h2>
                        <a href="tel:{{ App\clean_phone_number($introContent['phone'] )}}" class="lg:text-left transition mt-1 block"><span class=" lg:text-left">Phone:</span>
                            {{ App\format_phone_number($introContent['phone'] ) }}
                        </a>

                        <a href="tel:{{ App\clean_phone_number($introContent['fax'] )}}" class="lg:text-left transition block"><span class="lg:text-left">Fax</span>
                            {{ App\format_phone_number($introContent['fax'] ) }}
                        </a>
                        
                    </div>
                @endif

                @if ($quickLinkHeader)
                    <div class="mb-8">
                        <h2 class="text-simms-lime font-semibold mb-1">Follow us</h2>
                        <ul class="flex flex-row justify-start w-full items-start content-start gap-2">
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="{{$quickLinkHeader['fb']}}" target="_blank" class=""><i class="fa-brands fa-facebook-f text-white"></i></a></li>
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="{{$quickLinkHeader['instagram']}}" target="_blank"><i class="fa-brands fa-instagram text-white"></i></a></li>
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="{{$quickLinkHeader['youtube']}}" target="_blank"><i class="fa-brands fa-youtube-square text-white"></i></a></li>
                        </ul>
                    </div>
                @endif

                <div>
                    <h2 class="text-simms-lime font-semibold mb-3">Sign up for our newsletter</h2>
                    <button type="button" class="bg-primary-green uppercase text-[14px] tracking-[0.1em] text-center lg:text-right text-white inline-block px-5 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out">
                        SUBSCRIBE
                      </button>
                </div>
            </div>
            {{-- Right --}}
            @if ($introContent['form_contact'])
                <div class="mt-10 lg:mt-0 lg:w-2/3 contact-page-form">
                    <div class="w-full">
                        <h2 class="font-semibold font-arno_pro_subhead mb-5">{!! $introContent['title_contact_form']  !!}</h2>
                        <div>
                            {!! $introContent['form_contact'] !!}
                        </div>
                    </div>
                </div>
            @endif
        </section>


        @if (!empty($introContent['sales_representative']))
            <section class="mt-16 lg:mt-36">
                <h2 class="text-center mb-10 font-semibold font-arno_pro_subhead text-xl md:text-2xl lg:text-3xl">{{ $introContent['Section_Title'] }}</h2>

                <div class="sm:flex sm:flex-row sm:justify-center w-full sm:gap-4 md:gap-6">
                    @foreach ($introContent['sales_representative'] as $salesRep)
                        <div class="flex flex-col mb-10 bg-white shadow-lg">
                            <div class="w-full">
                                @php
                                    // Get image ID
                                    $image_id = $salesRep['image'];
                                    
                                    // Get the alt text of the image
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                @endphp
                                {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]) !!}
                                
                            </div>
                            <div class="py-5 px-4">
                                <div class="">
                                    <h3 class="font-arno_pro_subhead font-semibold text-lg text-[#707070]">{{ $salesRep['name'] }}</h3>
                                    <p class="font-[300] text-primary-green">{{ $salesRep['position'] }}</p>
                                </div>
                                
                                <div class="mt-3">
                                    <span class="text-primary-green block">{{ $salesRep['community_name'] }}</span>
                                    @if ($salesRep['email'])
                                        <span class="block">Email: <a href="mailto:{{ $salesRep['email'] }}">{{ $salesRep['email'] }}</a></span>
                                    @endif
    
                                    @if ($salesRep['email'])
                                        <span class="block">Phone: <a href="tell:{{ $salesRep['phone'] }}" class="text-simms-gold underline">{{ App\format_phone_number($salesRep['phone'] ) }}</a></span>
                                    @endif
                                    
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>

                
            </section>
        @endif
        
    </div>
</div>

<x-find-your-home :findYourHome="$findYourHome" />