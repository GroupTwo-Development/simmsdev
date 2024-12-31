<div class="hidden lg:block lg:mt-14">
    <div class="container mx-auto">
        <div class="relative flex flex-row justify-between w-full items-center border-t-[1px] border-b-[1px] border-[#0d0515]">
            <div class="flex flex-row justify-between items-center content-center space-x-2 h-[50px]">
                
                <div class="border-r-[1px] border-[#0d0515]">
                   <?php echo do_shortcode('[facetwp facet="community_qmi_desktop"]'); ?>

               </div>
       
               
               <div class="border-r-[1px] border-[#0d0515]">
                   <?php if (isset($component)) { $__componentOriginal67b35608722bcee218637ec24a02b934 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67b35608722bcee218637ec24a02b934 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-select','data' => ['title' => 'Price']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Price']); ?>
                        <?php $__env->slot('dropdown', null, []); ?> 
                           <?php echo facetwp_display('facet', 'home_price_main'); ?>

                        <?php $__env->endSlot(); ?>
                    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67b35608722bcee218637ec24a02b934)): ?>
<?php $attributes = $__attributesOriginal67b35608722bcee218637ec24a02b934; ?>
<?php unset($__attributesOriginal67b35608722bcee218637ec24a02b934); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67b35608722bcee218637ec24a02b934)): ?>
<?php $component = $__componentOriginal67b35608722bcee218637ec24a02b934; ?>
<?php unset($__componentOriginal67b35608722bcee218637ec24a02b934); ?>
<?php endif; ?> 
               </div>

             
                
                <div class="border-r-[1px] border-[#0d0515]">
                    <?php echo facetwp_display('facet', 'beds_'); ?>

                </div>

                
                <div class="border-r-[1px] border-[#0d0515]">
                    <?php echo facetwp_display('facet', 'baths'); ?>

                </div>
       
               
               <div class="border-r-[1px] border-[#0d0515]">
                   <?php echo facetwp_display( 'facet', 'community_sort' ); ?>

               </div>
            </div>
       
            
            <div>
                <button @click="showMap = !showMap" role="button"
                        class="relative h-[50px] flex items-center cursor-pointer px-[8px] lg:px-1 py-[5px] font-[300] text-lg">
                        <span x-text="showMap ? 'Card' : 'Map'"></span>
                        <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/homes/desktop-filter.blade.php ENDPATH**/ ?>