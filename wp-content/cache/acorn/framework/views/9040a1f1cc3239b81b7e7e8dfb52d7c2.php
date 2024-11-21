<?php if($homes_items['elevation_photos']): ?>
<section id="elevations" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
    <div class="container mx-auto ">

        <div class="flex flex-col justify-center items-center content-center  py-16 lg:py-16 xl:py-28">
            <div>
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Elevations</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 md:gap-2 py-3">
                <?php $__currentLoopData = $homes_items['elevation_photos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elevation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative mb-4 md:mb-0">
                        <a href="<?php echo e($elevation['sizes']['large']); ?>" data-fancybox="elevations" class="relative block overflow-hidden h-[250px] lg:h-[200px]">
                            <img alt="<?php echo e($elevation['alt']); ?>" src="<?php echo e($elevation['sizes']['medium']); ?>" class="w-full h-full" />
                            <div class="absolute bottom-0 left-0 h-full w-full bg-secondary-green bg-opacity-90 text-white text-center py-2 flex flex-col justify-center items-center">
                                <i class="fa-solid fa-plus text-xl"></i>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/homes/elevation.blade.php ENDPATH**/ ?>