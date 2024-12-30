<div class="relative object-cover w-full pt-10 pb-5  lg:pt-20" style="background-image: url('@asset('images/pattern2.png')')">
    {{-- wrapper --}}
    <div class="container mx-auto">
        {{-- section --}}
        <section class="lg:flex lg:flex-col lg:justify-center w-full">
       
            {{-- Right --}}
            @if ($introContent['form_contact'])
                <div class="mt-10 lg:mt-0 lg:max-w-screen-lg mx-auto  contact-page-form bg-white p-10">
                    <div class="w-full">
                        <h2 class="font-semibold font-arno_pro_subhead mb-5 text-center text-lg lg:text-2xl xl:text-3xl">{!! $introContent['title_contact_form']  !!}</h2>
                        <div>
                            {!! $introContent['form_contact'] !!}
                        </div>
                    </div>
                </div>
            @endif
        </section>


        @if (!empty($introContent['sales_representative']))
            @php
                $salesReps = $introContent['sales_representative'];
                $isSingleCard = count($salesReps) === 1;
            @endphp
            <section class="mt-16 lg:mt-36">
                <h2 class="text-center mb-10 font-semibold font-arno_pro_subhead text-xl md:text-2xl lg:text-3xl xl:text-4xl">{{ $introContent['Section_Title'] }}</h2>

                <div class="flex flex-row justify-center items-center gap-5">
                    @foreach ($salesReps as $salesRep)
                        <div class="bg-white shadow-lg flex flex-col h-full sm:w-1/2 lg:w-1/3 xl:w-1/3">
                            <div class="w-full h-64 lg:h-80 overflow-hidden">
                                @php
                                    // Get image ID
                                    $image_id = $salesRep['image'];
                                    
                                    // Get the alt text of the image
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                @endphp
                                {!! wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt, 'class' => 'h-full w-full object-left-top object-cover']) !!}
                            </div>
                            <div class="flex-grow py-5 px-4 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-arno_pro_subhead capitalize font-semibold text-lg text-[#707070]">{{ $salesRep['name'] }}</h3>
                                    <p class="font-[300] text-primary-green capitalize">{{ $salesRep['position'] }}</p>
                                </div>
                                <div class="mt-3">
                                    <span class="text-primary-green capitalize block">{{ $salesRep['community_name'] }}</span>
                                    @if ($salesRep['email'])
                                        <span class="block">Email: <a href="mailto:{{ $salesRep['email'] }}" class="underline text-simms-gold">{{ $salesRep['email'] }}</a></span>
                                    @endif

                                    @if ($salesRep['phone'])
                                        <span class="block">Phone: <a href="tel:{{ $salesRep['phone'] }}" class="text-simms-gold underline">{{ App\format_phone_number($salesRep['phone']) }}</a></span>
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