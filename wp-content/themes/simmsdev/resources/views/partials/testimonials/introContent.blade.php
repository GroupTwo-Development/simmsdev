@if($testimonialsIntroContent)
    <section id="description">
        {{-- description content --}}
        <div class="bg-primary-green relative pt-14 xl:pt-20 pb-16 lg:pb-24  overflow-hidden">
            <div class="container mx-auto">
                <div class="text-white text-center xl:max-w-screen-lg mx-auto">
                    @if ($testimonialsIntroContent['title'])
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2">{!! $testimonialsIntroContent['sub_title'] !!}</span>
                    @endif
                    @if ($testimonialsIntroContent['title'])
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5">{!! $testimonialsIntroContent['title']  !!}</h1>
                    @endif
                    @if ($testimonialsIntroContent['description'])
                        <div>
                            {!! $testimonialsIntroContent['description'] !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif