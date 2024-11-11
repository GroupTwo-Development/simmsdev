@if ($communities_items['location'])
    <section id="location">
        {{-- content-wrapper --}}
        <div class="lg:flex lg:flex-row lg:justify-between w-full">
            {{-- content-left --}}
            @if ($communities_items['location'])
                <div class="lg:w-1/2 lg:h-full">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="{{$communities_items['location']['latitude']}}" data-lng="{{$communities_items['location']['longitude']}}"></div>
                      </div>
                </div>
            @endif
            
            {{-- content-right --}}
            <div class="lg:w-1/2">
                <div class="relative object-cover w-full bg-primary-green insert" style="background-image: url('@asset('assets/pattern3.png')')">
                    <div class="container mx-auto">
                        <div class="py-10 sm:py-12 lg:pl-10">
                            <h2 class="text-white font-arno_pro_subhead font-[400] text-3xl mb-2">Map & Directions</h2>
                            <h4 class="text-simms-gold text-2xl font-arno_pro_subhead">{{ $title }}</h4>
                            <span class="text-sm font-[500] text-white">{{ $communities_items['city'] . ', ' . $communities_items['state'] }}</span>
        
                            <h5 class="mt-4 mb-2 font-arno_pro_subhead text-simms-gold text-2xl">Questions? We can help!</h5>
                         
                            @if ($sales_agent)
                              <div>
                                {{-- agent info --}}
                                <div class="text-white">
                                    <span class="capitalize font-normal">Sales Agent |</span>
                                    <span class="text-simms-gold font-normal">{{ $sales_agent['name'] }}</span>
                                </div>
                                <div class="text-white">
                                    @if ($sales_agent['phone'])
                                        <span class="capitalize font-normal">Phone: <a href="tel:{{ App\clean_phone_number($sales_agent['phone'])}}" class="text-simms-gold font-normal"> {{ App\format_phone_number($sales_agent['phone'] ) }}</a></span>
                                    @endif
    
                                    @if ($sales_agent['email'])
                                        <span class="block">Email: <a href="mailto:{{ $sales_agent['email'] }}" class="text-simms-gold font-normal">{{ $sales_agent['email'] }}</a></span>
                                    @endif
                                </div>
                              </div>
                            @endif
    
                            {{-- Hours --}}
                            @if ($communities_items['hours'])
                                <div class="py-4 text-white">
                                    <h5 class="text-white text-lg">Hours</h5>
                                    <div>
                                        <span class="font-[300]">{!! $communities_items['hours']  !!}</span>
                                    </div>
                                </div>
                            @endif
    
                            <div class="pb-3 text-white">
                                <span>Our model homes are open for walk-ins and appointments.</span>
                            </div>
    
                            <x-contact-form-modal class="bg-transparent border-[2px] text-[14px] border-white py-2 hover:bg-simms-gold transition duration-75 ease-in-out text-white">
                                <x-slot name="button_text">
                                    SCHEDULE A TOUR
                                </x-slot>
                            </x-contact-form-modal>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
@endif
