<div class="sm:max-w-md md:max-w-md lg:max-w-xl mx-auto">
    <div class="container mx-auto">
        <div>
            <?php if(has_nav_menu('primarp_page_nav')): ?>
                <div class="primary-page-main-nav mt-5 lg:mt-8 mb-5" aria-label="<?php echo e(wp_get_nav_menu_name('primarp_page_nav')); ?>">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'primarp_page_nav',
                        'menu_class' => 'primary-page-nav flex flex-row uppercase justify-between items-center space-x-1  relative capitalize tracking-[0.45px]',
                        
                    ]); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/primary-page-nav.blade.php ENDPATH**/ ?>