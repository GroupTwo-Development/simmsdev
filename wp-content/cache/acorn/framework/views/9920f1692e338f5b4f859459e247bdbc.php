
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'date', 'image', 'link']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'date', 'image', 'link']); ?>
<?php foreach (array_filter((['title', 'date', 'image', 'link']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="max-w-sm bg-white shadow mb-5">
    <div class="">
       <a href="<?php echo e($link); ?>">
        <img src="<?php echo e($image); ?>" alt="" class="h-[250px] w-full object-cover bg-cover object-center">
       </a>
    </div>
    <div class="p-5">
        <div>
            <span class="font-normal capitalize text-[16px] tracking-tighter mb-2">Posted: <time datetime="<?php echo e($date); ?>" class="text-primary-green"><?php echo e($date); ?></time></span>
        </div>
        <a href="<?php echo e($link); ?>">
            <h5 class="mb-2 text-xl tracking-tight font-normal font-agenda hover:text-simms-gold transition ease-in-out duration-75"><?php echo $title; ?></h5>
        </a>
    </div>
</div>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/blog-card.blade.php ENDPATH**/ ?>