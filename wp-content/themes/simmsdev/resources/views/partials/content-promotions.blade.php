
<div class="relative object-cover w-full pt-10 pb-16 lg:pt-10 xl:pt-16" style="background-image: url('@asset('images/pattern2.png')')">


    {{-- Section Three --}}
    @if (!empty($resourcesSectionThree['resource_slider']))
        <div class="">
            <div class="container mx-auto">
               
                @if (!empty($resourcesSectionThree['resource_slider']) && is_array($resourcesSectionThree['resource_slider']))
                    <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
                        @foreach ($resourcesSectionThree['resource_slider'] as $index => $resource)
                            <article class="bg-[#E5EFF0] shadow-lg mb-10 px-6 py-14 text-center {{ $index >= 3 ? 'hidden' : '' }}">
                                <h3 class="text-[#534E50] font-arno_pro_subhead font-normal mb-5 text-2xl">{{ $resource['offer_title'] }}</h3>
                                <div class="text-base font-normal">
                                    {!! $resource['offer_description'] !!}
                                </div>
                                <div class="mt-4">
                                    <span class="text-simms-lime uppercase">{{ $resource['learn_more_text'] }}</span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    @if (count($resourcesSectionThree['resource_slider']) > 3)
                        <div class="text-center mt-6">
                            <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                                Load More
                            </button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    @endif

</div>