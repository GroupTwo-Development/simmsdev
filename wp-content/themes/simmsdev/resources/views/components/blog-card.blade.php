
@props(['title', 'date', 'image', 'link'])
<div class="max-w-sm bg-white shadow mb-5">
    <div class="">
        <img src="{{ $image }}" alt="" class="h-[250px] w-full object-cover bg-cover object-center">
    </div>
    <div class="p-5">
        <div>
            <span class="font-normal capitalize text-[16px] tracking-tighter mb-2">Posted: <time datetime="{{ $date }}" class="text-primary-green">{{ $date }}</time></span>
        </div>
        <a href="{{ $link }}">
            <h5 class="mb-2 text-xl tracking-tight font-normal font-agenda hover:text-simms-gold transition ease-in-out duration-75">{!! $title !!}</h5>
        </a>
    </div>
</div>
