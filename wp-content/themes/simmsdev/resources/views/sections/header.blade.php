<header class="banner bg-secondary-green h-[90px] lg:h-[105px] fixed top-0 left-0 right-0 w-full z-50">
  @include('sections.mobile-header')
  @include('sections.desktop-header')
 

  {{-- @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif --}}
</header>



