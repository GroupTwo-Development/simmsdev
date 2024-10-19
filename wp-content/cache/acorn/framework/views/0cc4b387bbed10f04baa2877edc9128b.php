<div x-data="{ isOpen: false }" class="relative">
    <!-- Button to trigger the modal -->
    <button type="button" @click="isOpen = !isOpen" class="bg-simms-gold uppercase font-semibold tracking-[0.1em] text-center text-black inline-block px-3 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out">
        Get Started
    </button>

    <!-- Modal wrapper -->
    <div x-show="isOpen" class="fixed inset-0 z-10 overflow-y-auto">
        <!-- Background overlay -->
        <div 
            @click="isOpen = false" 
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            aria-hidden="true">
        </div>

        <!-- Modal content -->
        <div 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative z-10 flex min-h-screen items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <!-- Modal panel -->
            <?php if (isset($component)) { $__componentOriginal51bb4511c06b6950d93bbfbd6a147ddb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51bb4511c06b6950d93bbfbd6a147ddb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cta-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51bb4511c06b6950d93bbfbd6a147ddb)): ?>
<?php $attributes = $__attributesOriginal51bb4511c06b6950d93bbfbd6a147ddb; ?>
<?php unset($__attributesOriginal51bb4511c06b6950d93bbfbd6a147ddb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51bb4511c06b6950d93bbfbd6a147ddb)): ?>
<?php $component = $__componentOriginal51bb4511c06b6950d93bbfbd6a147ddb; ?>
<?php unset($__componentOriginal51bb4511c06b6950d93bbfbd6a147ddb); ?>
<?php endif; ?>
            
        </div>
    </div>
</div>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/sections/desktop-modal.blade.php ENDPATH**/ ?>