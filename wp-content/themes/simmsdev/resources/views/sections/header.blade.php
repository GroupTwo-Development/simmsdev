<header class="banner bg-secondary-green h-[90px] lg:h-[105px] fixed top-0 left-0 right-0 w-full z-50">
  @include('sections.mobile-header')
  @include('sections.desktop-header')
 
</header>

{{-- <header 
    class="banner h-[90px] lg:h-[105px] fixed top-0 left-0 right-0 w-full z-50 transition-all duration-300"
    x-data="{ scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'bg-white shadow-md' : 'bg-transparent'">
    
    @include('sections.mobile-header')
    @include('sections.desktop-header')
</header> --}}




