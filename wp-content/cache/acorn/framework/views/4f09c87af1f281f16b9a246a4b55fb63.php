

<div class="relative object-cover w-full pt-10 pb-16 lg:pt-20 xl:pt-28" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">

<?php dd($resourcesSectionThree['resource_slider']); ?>
    <?php if(!empty($resourcesSectionThree['resource_slider'])): ?>
        <div class="mt-10 lg:pt-20 xl:pt-28">
            <div class="container mx-auto">
                <?php if(!empty($resourcesSectionThree['resource_slider']) && is_array($resourcesSectionThree['resource_slider'])): ?>
                    <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
                        <?php $__currentLoopData = $resourcesSectionThree['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="bg-[#E5EFF0] shadow-lg mb-10 px-6 py-14 text-center <?php echo e($index >= 3 ? 'hidden' : ''); ?>">
                                <h3 class="text-[#534E50] font-arno_pro_subhead font-normal mb-5 text-2xl"><?php echo e($resource['offer_title']); ?></h3>
                                <div class="text-base font-normal">
                                    <?php echo $resource['offer_description']; ?>

                                </div>
                                <div class="mt-4">
                                    <span class="text-simms-lime uppercase"><?php echo e($resource['learn_more_text']); ?></span>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php if(count($resourcesSectionThree['resource_slider']) > 3): ?>
                        <div class="text-center mt-6">
                            <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                                Load More
                            </button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php if (isset($component)) { $__componentOriginalf20ba2696599e222bf515abd9ef1cf04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf20ba2696599e222bf515abd9ef1cf04 = $attributes; } ?>
<?php $component = App\View\Components\FindYourHome::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('find-your-home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FindYourHome::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['findYourHome' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($findYourHome)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf20ba2696599e222bf515abd9ef1cf04)): ?>
<?php $attributes = $__attributesOriginalf20ba2696599e222bf515abd9ef1cf04; ?>
<?php unset($__attributesOriginalf20ba2696599e222bf515abd9ef1cf04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf20ba2696599e222bf515abd9ef1cf04)): ?>
<?php $component = $__componentOriginalf20ba2696599e222bf515abd9ef1cf04; ?>
<?php unset($__componentOriginalf20ba2696599e222bf515abd9ef1cf04); ?>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-Special.blade.php ENDPATH**/ ?>