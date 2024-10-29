<?php
$communities = new WP_Query([
    'post_type' => 'community',
    'posts_per_page' => -1, // Adjust as needed
]);
?>


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
        <?php echo e($primaryPageHeader['community_sub_title']); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($primaryPageHeader['community_title']); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('bg_image', null, []); ?> 
        <?php
            $image_id = $primaryPageHeader['community_header_img'];
        ?>
        <?php echo App\get_image_with_alt($image_id, 'full', ['class' => 'bg-cover object-cover h-24 sm:h-28 md:h-36 lg:h-56 xl:h-52 object-center-top']); ?>

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

<div>
    <?php if (isset($component)) { $__componentOriginal007962bb73280e19ed3cf69bc1be25b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007962bb73280e19ed3cf69bc1be25b2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-page-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-page-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007962bb73280e19ed3cf69bc1be25b2)): ?>
<?php $attributes = $__attributesOriginal007962bb73280e19ed3cf69bc1be25b2; ?>
<?php unset($__attributesOriginal007962bb73280e19ed3cf69bc1be25b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007962bb73280e19ed3cf69bc1be25b2)): ?>
<?php $component = $__componentOriginal007962bb73280e19ed3cf69bc1be25b2; ?>
<?php unset($__componentOriginal007962bb73280e19ed3cf69bc1be25b2); ?>
<?php endif; ?>
</div>

<section x-data="{showMap: false}">
    
    <?php echo $__env->make('partials.community.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    

   
    <div  class="relative object-cover mt-1 h-full" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
         
        <div x-show="!showMap">
            <div class="container mx-auto">
                
                <div class="pt-10 pb-28 sm:flex sm:flex-row lg:flex-row 2xl:flex-row sm:gap-3 lg:gap-2 xl:gap-2 2xl:gap-4 justify-center content-center ">
                    <?php while(have_posts()): ?> <?php (the_post()); ?>
                        <?php echo $__env->first(['partials.content-communities'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

         
         <div x-data="leafletMap()" x-init="showMap" id="communitymap" class="h-96 w-full">
            <div id="communitymap" class="w-full h-full rounded-lg shadow-md bg-white"></div>
         </div>
    </div>

   
</section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.primary-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/archive-communities.blade.php ENDPATH**/ ?>