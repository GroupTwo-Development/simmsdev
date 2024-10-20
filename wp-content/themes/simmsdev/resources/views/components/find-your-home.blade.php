@if ($findYourHome)
    <section class="pt-14">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <span class="block font-semibold text-primary-green uppercase tracking-[0.15em] mb-3 text-sm">{{ $findYourHome['sub_title'] }}</span>
                <h2 class="font-normal text-secondary-green text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead lg:px-14 text-center">{{ $findYourHome['title'] }}</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @if ($findYourHome['find_your_home'])
                @foreach ($findYourHome['find_your_home'] as $home )
                    <div class="group relative bg-cover bg-center h-96" style="background-image: url('{{ wp_get_attachment_image_url($home['image'], 'full') }}');">
                        <!-- Black overlay stays in place -->
                        <div class="absolute inset-0 bg-black opacity-50"></div>

                        <!-- Title and link, shown on hover -->
                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-white text-2xl lg:text-3xl mb-4 font-arno_pro_subhead font-semibold">{{ $home['cta_link']['title'] }}</h3>
                            <x-cta-link href="{{ $home['cta_link']['url'] }}" class="text-white border-b-2 border-white hover:text-white transition-all ease-in-out">{{ __('Learn More') }}</x-cta-link>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        
    </section>
@endif
