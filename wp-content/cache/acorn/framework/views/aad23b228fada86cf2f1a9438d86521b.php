

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

<div class="relative object-cover w-full pt-10 pb-16 lg:pt-20 xl:pt-28" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
    
    <?php if(!empty($resourcesSectionOne['resource_slider'])): ?>
        
        <div class="container mx-auto">
            <div class=" pt-4 pb-6 px-4">
                <?php if($resourcesSectionOne['resource_slider']): ?>
                    <?php $i = 1; ?>
                    <div class="md:grid md:grid-cols-2 md:gap-5 lg:grid-cols-3 lg:gap-8 md:justify-center md:items-center">
                        <?php $__currentLoopData = $resourcesSectionOne['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $questionId = 'controlsAccordionItem' . $index;
                                $answerId = 'accordionItem' . $index;
                            ?>

                            
                            <div class="bg-white shadow-xl mb-10 py-10 px-6">
                                
                                <div class="text-center"><span class="h-[45px] w-[45px] rounded-full mx-auto border-[3px] border-simms-gold flex flex-col justify-center items-center mb-6"><i class="not-italic text-2xl font-semibold text-simms-gold"><?php echo e($i); ?></i></span></div>
                                <div>
                                    <h3 class="text-center font-arno_pro_subhead text-simms-rust text-2xl lg:text-3xl mb-4"><?php echo $resource['rfs1_title']; ?></h3>
                                    <div class="line-clamp-3"><?php echo $resource['rfs1_description']; ?></div>
                                </div>
                            </div>
                            
                            <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(!empty($resourcesSectionTwo['resource_slider'])): ?>
        <div class="container mx-auto">
            <div class=" py-10 px-4 lg:pt-20 xl:pt-28">
                <header class="text-center pb-10 lg:pb-5">
                    <h2 class="text-3xl sm:text-4xl font-arno_pro_subhead font-normal text-black mb-5"><?php echo e(__('Frequently Asked Questions')); ?></h2>
                </header>
                <?php if($resourcesSectionTwo['resource_slider']): ?>
                   <div class="bg-white">
                    <div x-data="{ selectedAccordionItem: null }" class="w-full overflow-hidden">
                        <?php $__currentLoopData = $resourcesSectionTwo['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $questionTwoId = 'controlsAccordionItem' . $index;
                                $answerTwoId = 'accordionItem' . $index;
                            ?>
                            <div class="border-t-[2px] border-primary-green last:border-b-2">
                                <button 
                                    id="<?php echo e($questionTwoId); ?>" 
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-white p-4 lg:py-5 text-left  text-[#002829] font-semibold text-lg lg:text-xl font-arno_pro_subhead xl:text-2xl"
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