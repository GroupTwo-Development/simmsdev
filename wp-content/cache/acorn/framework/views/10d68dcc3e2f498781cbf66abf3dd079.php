<div  class="relative">
    <!-- Button to trigger the modal -->
    <button type="button" data-fancybox="" data-src="#dialog-content"
    <?php echo e($attributes->merge(['class' => 'bg-simms-gold uppercase font-semibold tracking-[0.1em] text-center text-black inline-block px-3 py-3 whitespace-nowrap  transition-all ease-in-out'])); ?>>
       <?php echo e($button_text); ?>

    </button>

    <!-- Modal wrapper -->
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
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/contact-form-modal.blade.php ENDPATH**/ ?>