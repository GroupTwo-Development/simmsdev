{{-- Reources page information --}}

@if ($introContent)
    <section id="description">
        {{-- Description Content --}}
        <div class="bg-primary-green relative pt-14 xl:pt-20 lg:pt-16 pb-16 lg:pb-24 overflow-hidden text-black">
            <div class="container mx-auto">
                <div class="text-center xl:max-w-screen-lg mx-auto lg:pt-12">
                    @if ($introContent['title'])
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2">{!! $introContent['sub_title'] !!}</span>
                    @endif
                    @if ($introContent['title'])
                        <h1 class="font-arno_pro_subhead font-normal text-white text-3xl md:text-4xl mb-5">{!! $introContent['title'] !!}</h1>
                    @endif
                    @if ($introContent['description'])
                        <div class="text-white">
                            {!! $introContent['description'] !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif

<div class="relative object-cover w-full pt-10 pb-16" style="background-image: url('@asset('images/pattern2.png')')">
    {{-- Section One --}}
    @if ($resourcesSectionOne)
        <div class="container mx-auto">
            <div class="bg-white py-10 px-4">
                @if ($resourcesSectionOne['resource_slider'])
                    @php $i = 1; @endphp
                    <div x-data="{ selectedAccordionItem: null }" class="w-full divide-y divide-primary-green overflow-hidden">
                        @foreach ($resourcesSectionOne['resource_slider'] as $index => $resource)
                            @php
                                $questionId = 'controlsAccordionItem' . $index;
                                $answerId = 'accordionItem' . $index;
                            @endphp
                            <div class="divide-y divide-[#00676D]">
                                <button 
                                    id="{{ $questionId }}" 
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-white p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none text-[#002829] font-semibold text-lg font-arno_pro_subhead"
                                    aria-controls="{{ $answerId }}"
                                    @click="selectedAccordionItem = selectedAccordionItem === '{{ $index }}' ? null : '{{ $index }}'"
                                    :class="selectedAccordionItem === '{{ $index }}' ? 'font-bold' : 'font-medium'"
                                    :aria-expanded="selectedAccordionItem === '{{ $index }}'">
                                    {{ $i }}. {!! $resource['rfs1_title'] !!}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="selectedAccordionItem === '{{ $index }}' ? 'rotate-180' : ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div x-cloak x-show="selectedAccordionItem === '{{ $index }}'" id="{{ $answerId }}" role="region" aria-labelledby="{{ $questionId }}" x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty font-agenda font-300">
                                        {!! $resource['rfs1_description'] !!}
                                    </div>
                                </div>
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    @endif

    {{-- Section Two --}}
    @if ($resourcesSectionTwo)
        <div class="container mx-auto">
            <div class="bg-white py-10 px-4">
                <header class="text-center pb-10 lg:pb-5">
                    <h2 class="text-3xl sm:text-4xl font-arno_pro_subhead font-normal text-[#002829] mb-5">{{ __('Frequently Asked Questions') }}</h2>
                </header>
                @if ($resourcesSectionTwo['resource_slider'])
                    <div x-data="{ selectedAccordionItem: null }" class="w-full divide-y divide-primary-green overflow-hidden">
                        @foreach ($resourcesSectionTwo['resource_slider'] as $index => $resource)
                            @php
                                $questionTwoId = 'controlsAccordionItem' . $index;
                                $answerTwoId = 'accordionItem' . $index;
                            @endphp
                            <div class="divide-y divide-[#00676D]">
                                <button 
                                    id="{{ $questionTwoId }}" 
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-white py-4 px-2 lg:px-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none text-[#002829] font-semibold text-lg font-arno_pro_subhead"
                                    aria-controls="{{ $questionTwoId }}"
                                    @click="selectedAccordionItem = selectedAccordionItem === '{{ $index }}' ? null : '{{ $index }}'"
                                    :class="selectedAccordionItem === '{{ $index }}' ? 'font-bold' : 'font-medium'"
                                    :aria-expanded="selectedAccordionItem === '{{ $index }}'">
                                    {!! $resource['aas1_title'] !!}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="selectedAccordionItem === '{{ $index }}' ? 'rotate-180' : ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div x-cloak x-show="selectedAccordionItem === '{{ $index }}'" id="{{ $answerTwoId }}" role="region" aria-labelledby="{{ $questionTwoId }}" x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty font-agenda font-300">
                                        {!! $resource['rfs1_description'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    @endif

    {{-- Section Three --}}
    @if ($resourcesSectionThree)
        <div class="mt-10">
            <div class="container mx-auto">
                <header class="text-center pb-10 lg:pb-5">
                    <h2 class="text-3xl sm:text-4xl font-arno_pro_subhead font-normal text-[#002829] mb-5">{{ __('Special Offers') }}</h2>
                </header>
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

<x-find-your-home :findYourHome="$findYourHome" />
