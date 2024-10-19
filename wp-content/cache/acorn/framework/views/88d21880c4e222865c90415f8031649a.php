<div class="mobile-nav xl:hidden">
    <div class="container mx-auto">
        
        <div class="flex flex-row justify-between w-full items-center content-center py-5">
             
             <div class="max-w-40">
                <?php if(function_exists('the_custom_logo')): ?>
                    <?php (the_custom_logo()); ?>
                <?php endif; ?>
                <hr class="h-0.5 bg-white rounded-md">
            </div>
            
            <div>
                <button id="drawer-toggle-btn" class="relative z-50 mt-2.5" data-drawer-show="drawer-menu">
                    <svg id="hamburger-icon" class="w-10 h-7 text-white border-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h35M6 12h30m-20 6h20"/>
                    </svg>
                    <svg id="close-icon" class="hidden w-10 h-7  text-white border-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

 <!-- drawer component -->
 <div id="drawer-menu" class="fixed top-[90px] lg:top-[105px]  left-0 z-40 h-screen py-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 shadow-md" tabindex="-1" aria-labelledby="drawer-label">
    <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation_mobile')); ?>">
        <?php echo wp_nav_menu([
            'theme_location' => 'primary_navigation_mobile',
            'menu_class' => 'nav font-bold tracking:[0.45px]',
            'echo' => false,
            'walker' => new \App\Tailwind_Nav_Walker()
        ]); ?>

    </nav>
    
    
  </div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/sections/mobile-header.blade.php ENDPATH**/ ?>