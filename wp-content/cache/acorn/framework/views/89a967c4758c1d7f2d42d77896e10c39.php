<div class="desktop hidden xl:block h-full">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center w-full py-5 xl:py-8">

            <div class="max-w-40 relative">
                <?php if(function_exists('the_custom_logo')): ?>
                    <?php (the_custom_logo()); ?>
                <?php endif; ?>
               
                
            </div>


           
            
            <?php if(has_nav_menu('primary_navigation')): ?>
                <div class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav-desktop flex space-x-1 text-white relative capitalize tracking-[0.45px] text-white',
                        'echo' => false,
                        'walker' => new \App\desktop_Nav_Walker()
                    ]); ?>

                </div>
            <?php endif; ?>

            
            <div class="ml-2">
                <?php echo $__env->make('sections.desktop-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/sections/desktop-header.blade.php ENDPATH**/ ?>