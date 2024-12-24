
<?php if($communities_items['sitemap']): ?>

    <section id="sitemap" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="py-16 lg:py-16 xl:py-28 flex flex-col justify-center items-center content-center w-full text-center">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Site Map</h2>
                <div class="py-3 group">
                    <a
                        data-fancybox
                        data-src="<?php echo e($communities_items['sitemap']['sizes']['large']); ?>"
                        data-caption="<?php echo e(($communities_items['sitemap']['caption']) ? $communities_items['sitemap']['caption'] : ''); ?>"
                        class="relative block border-2 border-simms-gold shadow-md group-hover:-translate-y-1 duration-300 group-hover:cursor-pointer"
                        >
                        <img src="<?php echo e($communities_items['sitemap']['sizes']['large']); ?>" alt="<?php echo e($communities_items['sitemap']['alt']); ?>" />
                    </a>
                </div>

               

                <?php if($communities_items['sitemap_url']): ?>
                <?php if (isset($component)) { $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $attributes; } ?>
<?php $component = App\View\Components\CtaLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($communities_items['sitemap_url']).'','class' => 'text-secondary-green border-b-secondary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out']); ?><?php echo e(__('View Interactive Site Map')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $attributes = $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $component = $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/sitemap.blade.php ENDPATH**/ ?>