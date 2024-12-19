<?php if($findYourHome): ?>
    <section class="pt-14 lg:pt-20">
        <div class="container mx-auto">
            <div class="text-center mb-8 lg:mb-12">
                <span class="block font-semibold text-primary-green uppercase tracking-[0.15em] mb-3 text-sm lg:text-2xl"><?php echo e($findYourHome['sub_title']); ?></span>
                <h2 class="font-normal text-secondary-green text-2xl lg:text-3xl xl:text-4xl mb-3 font-arno_pro_subhead lg:px-14 text-center"><?php echo e($findYourHome['title']); ?></h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <?php if($findYourHome['find_your_home']): ?>
                <?php $__currentLoopData = $findYourHome['find_your_home']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative bg-cover bg-center h-96 cursor-pointer" style="background-image: url('<?php echo e(wp_get_attachment_image_url($home['image'], 'full')); ?>');">
                        <!-- Black overlay with hover effect -->
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

                        <!-- Title and link, shown on hover -->
                        <div class="absolute inset-0 flex flex-col justify-center items-center text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-white text-2xl lg:text-3xl mb-4 font-arno_pro_subhead font-semibold"><?php echo e($home['cta_link']['title']); ?></h3>
                            <?php if (isset($component)) { $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $attributes; } ?>
<?php $component = App\View\Components\CtaLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($home['cta_link']['url']).'','class' => 'text-white border-b-2 border-white hover:border-simms-gold hover:text-simms-gold transition-all ease-in-out']); ?><?php echo e(__('Learn More')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $attributes = $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $component = $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/find-your-home.blade.php ENDPATH**/ ?>