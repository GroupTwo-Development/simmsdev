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
        <?php echo e($primaryPageHeader['homes_sub_title']); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($primaryPageHeader['homes_title']); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('bg_image', null, []); ?> 
        <?php
            $image_id = $primaryPageHeader['homes_header_img'];
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

<section x-data="{ showMap: false }" class="relative" x-cloak>
    
    <?php echo $__env->make('partials.homes.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

  

    
    <?php echo $__env->make('partials.homes.desktop-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php if (isset($component)) { $__componentOriginal1fe58ff5ee2d566696955880311b28b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1fe58ff5ee2d566696955880311b28b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.user-selection','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-selection'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1fe58ff5ee2d566696955880311b28b3)): ?>
<?php $attributes = $__attributesOriginal1fe58ff5ee2d566696955880311b28b3; ?>
<?php unset($__attributesOriginal1fe58ff5ee2d566696955880311b28b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1fe58ff5ee2d566696955880311b28b3)): ?>
<?php $component = $__componentOriginal1fe58ff5ee2d566696955880311b28b3; ?>
<?php unset($__componentOriginal1fe58ff5ee2d566696955880311b28b3); ?>
<?php endif; ?>
   
    <div  class="relative object-cover mt-1 w-full " style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
         

         
        <div  x-show="!showMap" >
            <div class="container mx-auto">
                
                <div class="community-wrapper relative facetwp-template grid grid-cols-1 sm:g sm:grid-cols-2 sm:gap-3 lg:grid-cols-3 content  justify-center items-start content-center lg:pt-12">
                    <?php while(have_posts()): ?> <?php (the_post()); ?>
                        <?php echo $__env->make('partials.content-homes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        
                    <?php endwhile; ?>
                </div>
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

        <div class="container mx-auto">
            <div class="map-area">
              <div x-show="showMap" 
                  x-transition:enter="transition ease-out duration-300 transform"
                  x-transition:enter-start="opacity-0 -translate-x-full"
                  x-transition:enter-end="opacity-100 translate-x-0"
                  x-transition:leave="transition ease-in duration-300 transform"
                  x-transition:leave-start="opacity-100 translate-x-0"
                  x-transition:leave-end="opacity-0 -translate-x-full"
                  class="w-full"
              >
  
              <?php echo do_shortcode('[facetwp facet="available_home_map"]'); ?>
  
              
             
              </div>
            </div>
          </div>


       
    </div>

           
           <div id="dynamic-footer-content" class="w-full">
            <div class="flex flex-col lg:flex-row lg:justify-between  w-full">
                
                <div class="bg-[#00676D] bg-repeat bg-cover opacity-[1]  flex flex-col justify-center lg:w-1/2" style="background-image: url('<?= \Roots\asset('images/pattern3.png'); ?>')">
                    <div class="container mx-auto">
                        <div id="footer-text" class="flex flex-col justify-center items-center m-4 sm:m-8">
                            <div class="text-white py-6 px-4 xl:px-6 xl:py-8 text-left xl:ml-14">
                                <span class="block text-simms-gold text-sm mb-2 tracking-[0.015rem] lg:mb-5 uppercase font-semibold">New Home Communities</span>
                                <h1 class="font-arno_pro_subhead text-2xl lg:text-3xl xl:text-4xl mb-1 lg:mb-4"></h1>
                                <div id="footer-description"></div>
                            </div>
                        </div>
                    </div>
                
                </div>
                
                <div class="lg:w-1/2">
                    
                    <div class="w-full sm:h-96 lg:h-[460px]">
                        <img id="footer-image" src="/wp-content/uploads/2024/10/Component-27-–-14.jpg" alt="" class="w-full object-cover bg-cover h-full">
                    </div>
                </div>
            </div>
        </div>
</section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.primary-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/archive-homes.blade.php ENDPATH**/ ?>