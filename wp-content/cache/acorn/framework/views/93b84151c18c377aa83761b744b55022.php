<?php $__env->startSection('content'); ?>
  <?php if (isset($component)) { $__componentOriginal67ccc8fcfa79786f1e51efaca77350ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67ccc8fcfa79786f1e51efaca77350ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('subtitle', null, []); ?> 
            <?php echo e(__('Gallery')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(the_title()); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bg_image', null, []); ?> 
            <?php
                $image_id = $primaryPageHeader['homes_header_img'];
            ?>
            <img src="<?= \Roots\asset('assets/blog.jpg'); ?>" alt="">        
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67ccc8fcfa79786f1e51efaca77350ff)): ?>
<?php $attributes = $__attributesOriginal67ccc8fcfa79786f1e51efaca77350ff; ?>
<?php unset($__attributesOriginal67ccc8fcfa79786f1e51efaca77350ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67ccc8fcfa79786f1e51efaca77350ff)): ?>
<?php $component = $__componentOriginal67ccc8fcfa79786f1e51efaca77350ff; ?>
<?php unset($__componentOriginal67ccc8fcfa79786f1e51efaca77350ff); ?>
<?php endif; ?>
    <header class="bg-primary-green py-5">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center gap-10">
                <a href="/photos" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Photos</a>
                <a href="/videos" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Videos</a>
                <a href="/virtual-tours" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Virtual tours</a>
            </div>
        </div>
    </header>
    <div  class="relative object-cover w-full pt-10 pb-16" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
        <div class="mt-1">
            <div class="container mx-auto">
               <div>
                    <?php while(have_posts()): ?> <?php (the_post()); ?>
                        <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endwhile; ?>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.primary-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/page-gallery.blade.php ENDPATH**/ ?>