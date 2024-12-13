

<?php if($introContent): ?>
    <section id="description">
        
        <div class="bg-primary-green relative pt-14 xl:pt-20 lg:pt-16 pb-16 lg:pb-24 overflow-hidden text-black">
            <div class="container mx-auto">
                <div class="text-center xl:max-w-screen-lg mx-auto lg:pt-12">
                    <?php if($introContent['title']): ?>
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2"><?php echo $introContent['sub_title']; ?></span>
                    <?php endif; ?>
                    <?php if($introContent['title']): ?>
                        <h1 class="font-arno_pro_subhead font-normal text-white text-3xl md:text-4xl mb-5"><?php echo $introContent['title']; ?></h1>
                    <?php endif; ?>
                    <?php if($introContent['description']): ?>
                        <div class="text-white">
                            <?php echo $introContent['description']; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<div class="relative object-cover w-full pt-10 pb-16" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
    
    <?php if($resourcesSectionOne): ?>
        <div class="container mx-auto">
            <div class="bg-white py-10 px-4">
                <?php if($resourcesSectionOne['resource_slider']): ?>
                    <?php $i = 1; ?>
                    <div x-data="{ selectedAccordionItem: null }" class="w-full divide-y divide-primary-green overflow-hidden">
                        <?php $__currentLoopData = $resourcesSectionOne['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $questionId = 'controlsAccordionItem' . $index;
                                $answerId = 'accordionItem' . $index;
                            ?>
                            <div class="divide-y divide-[#00676D]">
                                <button 
                                    id="<?php echo e($questionId); ?>" 
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-white p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none text-[#002829] font-semibold text-lg font-arno_pro_subhead"
                                    aria-controls="<?php echo e($answerId); ?>"
                                    @click="selectedAccordionItem = selectedAccordionItem === '<?php echo e($index); ?>' ? null : '<?php echo e($index); ?>'"
                                    :class="selectedAccordionItem === '<?php echo e($index); ?>' ? 'font-bold' : 'font-medium'"
                                    :aria-expanded="selectedAccordionItem === '<?php echo e($index); ?>'">
                                    <?php echo e($i); ?>. <?php echo $resource['rfs1_title']; ?>

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="selectedAccordionItem === '<?php echo e($index); ?>' ? 'rotate-180' : ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div x-cloak x-show="selectedAccordionItem === '<?php echo e($index); ?>'" id="<?php echo e($answerId); ?>" role="region" aria-labelledby="<?php echo e($questionId); ?>" x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty font-agenda font-300">
                                        <?php echo $resource['rfs1_description']; ?>

                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if($resourcesSectionTwo): ?>
        <div class="container mx-auto">
            <div class="bg-white py-10 px-4">
                <header class="text-center pb-10 lg:pb-5">
                    <h2 class="text-3xl sm:text-4xl font-arno_pro_subhead font-normal text-[#002829] mb-5"><?php echo e(__('Frequently Asked Questions')); ?></h2>
                </header>
                <?php if($resourcesSectionTwo['resource_slider']): ?>
                    <div x-data="{ selectedAccordionItem: null }" class="w-full divide-y divide-primary-green overflow-hidden">
                        <?php $__currentLoopData = $resourcesSectionTwo['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $questionTwoId = 'controlsAccordionItem' . $index;
                                $answerTwoId = 'accordionItem' . $index;
                            ?>
                            <div class="divide-y divide-[#00676D]">
                                <button 
                                    id="<?php echo e($questionTwoId); ?>" 
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-white py-4 px-2 lg:px-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none text-[#002829] font-semibold text-lg font-arno_pro_subhead"
                                    aria-controls="<?php echo e($questionTwoId); ?>"
                                    @click="selectedAccordionItem = selectedAccordionItem === '<?php echo e($index); ?>' ? null : '<?php echo e($index); ?>'"
                                    :class="selectedAccordionItem === '<?php echo e($index); ?>' ? 'font-bold' : 'font-medium'"
                                    :aria-expanded="selectedAccordionItem === '<?php echo e($index); ?>'">
                                    <?php echo $resource['aas1_title']; ?>

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="selectedAccordionItem === '<?php echo e($index); ?>' ? 'rotate-180' : ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                                <div x-cloak x-show="selectedAccordionItem === '<?php echo e($index); ?>'" id="<?php echo e($answerTwoId); ?>" role="region" aria-labelledby="<?php echo e($questionTwoId); ?>" x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty font-agenda font-300">
                                        <?php echo $resource['rfs1_description']; ?>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if($resourcesSectionThree): ?>
        <div class="mt-10">
            <div class="container mx-auto">
                <header class="text-center pb-10 lg:pb-5">
                    <h2 class="text-3xl sm:text-4xl font-arno_pro_subhead font-normal text-[#002829] mb-5"><?php echo e(__('Special Offers')); ?></h2>
                </header>
                <?php if($resourcesSectionThree['resource_slider']): ?>
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
                <?php endif; ?>
                <?php if(count($resourcesSectionThree['resource_slider']) > 3): ?>
                    <div class="text-center mt-6">
                        <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                            Load More
                        </button>
                    </div>
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
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-resource.blade.php ENDPATH**/ ?>