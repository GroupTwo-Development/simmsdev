<section id="scroll-to-section" x-data="initScrollToSection()"  class="menu-scroll lg:block top-[90px] lg:top-[90px] xl:top-[105px] left-0 w-full  z-10 transition-transform bg-secondary-green">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <div>
            <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#overview']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#overview']); ?>
                 <?php $__env->slot('title', null, []); ?> Overview <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>


            <?php if($communities_items['comm_description']): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#description']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#description']); ?>
                     <?php $__env->slot('title', null, []); ?> Description <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>
            

            <?php if($communities_items['sitemap']): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#sitemap']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#sitemap']); ?>
                     <?php $__env->slot('title', null, []); ?> Sitemap <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>
           
            <?php if($communities_items['point_of_interest']): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#pointsofinterest']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#pointsofinterest']); ?>
                     <?php $__env->slot('title', null, []); ?> Points of Interest <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(!empty($associated_floorplans)): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#floorplans']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#floorplans']); ?>
                     <?php $__env->slot('title', null, []); ?> Floorplans <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(!empty($associated_homes['homes'])): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#availablehomes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#availablehomes']); ?>
                     <?php $__env->slot('title', null, []); ?> Quick Move-In Homes <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($communities_items['location']): ?>
                <?php if (isset($component)) { $__componentOriginal537518723fbaeaee5e8909e13a3249f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537518723fbaeaee5e8909e13a3249f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-menu-link','data' => ['href' => '#location']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scroll-to-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#location']); ?>
                     <?php $__env->slot('title', null, []); ?> Map & Directions <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $attributes = $__attributesOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__attributesOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537518723fbaeaee5e8909e13a3249f9)): ?>
<?php $component = $__componentOriginal537518723fbaeaee5e8909e13a3249f9; ?>
<?php unset($__componentOriginal537518723fbaeaee5e8909e13a3249f9); ?>
<?php endif; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/scroll-to-menu.blade.php ENDPATH**/ ?>