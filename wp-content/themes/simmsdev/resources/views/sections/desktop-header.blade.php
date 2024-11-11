<div class="desktop hidden xl:block h-full">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center w-full py-5 xl:py-8">
            {{-- logo/nav --}}
            <div class="max-w-40">
                @if (function_exists('the_custom_logo'))
                    @php(the_custom_logo())
                @endif
                <hr class="h-0.5 bg-white rounded-md">
            </div>
           
            {{-- Primary navigation --}}
            @if (has_nav_menu('primary_navigation'))
                <div class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav-desktop flex space-x-1 text-white relative capitalize tracking-[0.45px] text-white',
                        'echo' => false,
                        'walker' => new \App\desktop_Nav_Walker()
                    ]) !!}
                </div>
            @endif

            {{-- Cta --}}
            <div class="ml-2">
                @include('sections.desktop-modal')
            </div>
        </div>
    </div>
</div>