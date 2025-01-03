<div id="primaryPageGallery" class="f-carousel">
    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
            class="f-carousel__slide"
            data-thumb-src="<?php echo e($image['sizes']['thumbnail']); ?>"
            data-fancybox="gallery"
            data-src="<?php echo e($image['sizes']['large']); ?>"
        >
            <div class="relative">
                <img
                alt="<?php echo e($image['alt']); ?>"
                width="1600"
                height="1067"
                class="bg-cover object-cover w-full h-[250px] sm:h-[300px] md:h-[400px] lg:h-[600px] xl:h-[525px] 2xl:h-[600px] inset-0"
                data-lazy-src="<?php echo e($image['sizes']['large']); ?>"
            />
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/primary-page-gallery.blade.php ENDPATH**/ ?>