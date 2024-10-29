<div class="relative">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between w-full">
            
            <div class="flex flex-row w-full justify-start gap-1">
                
                <div>
                    <?php if (isset($component)) { $__componentOriginalc35b136797cba7f49c5964a868ab6190 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc35b136797cba7f49c5964a868ab6190 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mobile-filter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mobile-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
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

                
                <div>
                    <?php if (isset($component)) { $__componentOriginal67b35608722bcee218637ec24a02b934 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67b35608722bcee218637ec24a02b934 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-select','data' => ['class' => 'border-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-2']); ?>
                        <span class="mr-1 text-sm font-normal">Sorted By: Price Low To High</span>
                         <?php $__env->slot('itemslist', null, []); ?> 
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Mont Blanc
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Monte Rosa
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Dom <span class="text-gray-400">(no good)</span>
                                </a>
                            </li>
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
            </div>
            
            <div>
                <button @click="showMap = !showMap" role="button"
                    class="relative h-[40px] flex items-center cursor-pointer px-[8px] py-[5px] border-[1px] border-gray-300 rounded-[3px] font-semibold text-sm">
                    <span x-text="showMap ? 'Card' : 'Map'"></span>
                    <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>


<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/mobile.blade.php ENDPATH**/ ?>