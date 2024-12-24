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
            <?php echo e(__('About')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__('Simms Community Blog')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bg_image', null, []); ?> 
            <?php
                $image_id = $primaryPageHeader['homes_header_img'];
            ?>
            <img src="<?= \Roots\asset('assets/blog-header.jpg'); ?>" alt="">        
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
    
    <section class="border-b-[1px] lg:bg-primary-green lg:py-8">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center">
                <div class="lg:hidden">
                    <?php echo do_shortcode('[facetwp facet="categories"]'); ?>

                </div>

                <div class="hidden lg:block desktop-filter">
                    <?php echo do_shortcode('[facetwp facet="_categories"]'); ?>
                </div>
              
            </div>
        </div>
    </section>
    <div  class="relative object-cover w-full pt-10 pb-16" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">

        <div class="mt-1">
            <div class="container mx-auto">
                <?php if(! have_posts()): ?>
                    <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning']); ?>
                    <?php echo __('Sorry, no results were found.', 'sage'); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>

                    <?php echo get_search_form(false); ?>

                <?php endif; ?>
            </div>
        </div>


        <div class="mt-1">
            <div class="container mx-auto">
               <div class="facetwp-template sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-3  content-center">
                    <?php while(have_posts()): ?> <?php (the_post()); ?>
                        <?php echo $__env->make( 'partials.content-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endwhile; ?>
               </div>

               
               <div class="pt-6 pagination flex justify-center items-center content-center">
                <?php if (isset($component)) { $__componentOriginal44d6f84b10a19020b7858e09eb0b603d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44d6f84b10a19020b7858e09eb0b603d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.load-more','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('load-more'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44d6f84b10a19020b7858e09eb0b603d)): ?>
<?php $attributes = $__attributesOriginal44d6f84b10a19020b7858e09eb0b603d; ?>
<?php unset($__attributesOriginal44d6f84b10a19020b7858e09eb0b603d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44d6f84b10a19020b7858e09eb0b603d)): ?>
<?php $component = $__componentOriginal44d6f84b10a19020b7858e09eb0b603d; ?>
<?php unset($__componentOriginal44d6f84b10a19020b7858e09eb0b603d); ?>
<?php endif; ?>
               </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.primary-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/home.blade.php ENDPATH**/ ?>