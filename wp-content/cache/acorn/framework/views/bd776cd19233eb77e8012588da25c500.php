<div class="relative lg:hidden border-t-[1px] border-b-[1px] border-[#0d0515] h-[55px]">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between items-center content-center w-full gap-2 h-[55px]">
            
            <div class="flex flex-row w-full justify-between content-center items-center gap-2 h-full">
                
                <div class="border-r-[1px] border-[#0d0515]">
                    <?php if (isset($component)) { $__componentOriginalc35b136797cba7f49c5964a868ab6190 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc35b136797cba7f49c5964a868ab6190 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mobile-filter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mobile-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <div>
                                <div>
                                    <?php echo do_shortcode('[facetwp facet="areas"]'); ?>

                                </div>

                                <div class="mt-5">
                                    <?php echo facetwp_display('facet', '_price'); ?>

                                </div>

                          
                            </div>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc35b136797cba7f49c5964a868ab6190)): ?>
<?php $attributes = $__attributesOriginalc35b136797cba7f49c5964a868ab6190; ?>
<?php unset($__attributesOriginalc35b136797cba7f49c5964a868ab6190); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc35b136797cba7f49c5964a868ab6190)): ?>
<?php $component = $__componentOriginalc35b136797cba7f49c5964a868ab6190; ?>
<?php unset($__componentOriginalc35b136797cba7f49c5964a868ab6190); ?>
<?php endif; ?>
                </div>

                
                <div class="border-r-[1px] border-[#0d0515]  h-[50px]">
                    <?php echo facetwp_display( 'facet', 'community_sort' ); ?>

                </div>
            </div>
            
            <div class="">
                <button @click="showMap = !showMap" role="button"
                    class="relative flex items-center cursor-pointer px-[8px] py-[5px] rounded-[3px] font-[300] text-sm">
                    <span x-text="showMap ? 'Card' : 'Map'"></span>
                    <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>


<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/mobile.blade.php ENDPATH**/ ?>