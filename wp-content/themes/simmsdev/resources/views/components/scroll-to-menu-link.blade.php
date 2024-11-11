@if ($title)
    <a {{ $attributes->merge(['class' => 'scroll-link uppercase font-normal  text-center text-white inline-block px-3 py-3 whitespace-nowrap hover:text-simms-gold transition-all ease-in-out', 'href' => '']) }}>{{ $title }}</a>
@endif
