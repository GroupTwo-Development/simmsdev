<div  class="relative">
    <!-- Button to trigger the modal -->
    <button type="button" data-fancybox="" data-src="#dialog-content"
    {{ $attributes->merge(['class' => 'bg-simms-gold uppercase font-semibold tracking-[0.1em] text-center text-black inline-block px-3 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out']) }}>
       {{ $button_text }}
    </button>

    <!-- Modal wrapper -->
    <x-cta-modal />
</div>
