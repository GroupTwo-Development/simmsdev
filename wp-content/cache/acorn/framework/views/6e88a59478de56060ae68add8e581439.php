
    <section id="overview" class="lg:flex lg:flex-row w-full lg:justify-between lg:items-start">
        
        <div class="container mx-auto mt-5 mb-5 lg:w-1/2 xl:w-[45%]">
            <div class="container mx-auto">
                <div class="relative w-full">
                    <div class="pb-3">
                        <?php if($plans_items['marketing_switch'] == 'yes'): ?>
                             <span class="text-primary-green font-semibold tracking[0.15em] uppercase text-sm block mb-2"><?php echo e($plans_items['marketing_text']); ?></span>
                        <?php endif; ?>
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl" aria-describedby="<?php echo e($title); ?>"><?php echo e($title); ?></h1>
                    </div>

                    
                    <div class="md:mr-80 lg:mr-1 2xl:mr-24">
                        <?php if(isset($plans_items['beds']) || isset($plans_items['baths'] )|| $plans_items['sqft'] || $plans_items['half_baths']): ?>
                            <div class="border-t-[1px] border-simms-gold">
                                <div class="py-3 flex flex-row justify-between sm:justify-start items-center content-center gap-1 sm:gap-14 ">
                                    <?php if($plans_items['beds']): ?>
                                        <div class="flex flex-row  md:flex-row lg:flex-row xl:flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bbeds-icon.png'); ?> "  alt="beds"/>
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo e(($plans_items['beds'])); ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Beds</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($plans_items['baths'] || isset($plans_items['half_baths'])): ?>
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bathroom-icon.png'); ?> "  alt="baths"/>
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo ($plans_items['half_baths'] ) ? ($plans_items['baths'] . '.5') : $plans_items['baths']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Baths</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($plans_items['sqft']): ?>
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover " src="<?= \Roots\asset('images/size-icon.png'); ?> "  alt="sqft"/>
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo $plans_items['sqft']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">SQ FT</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        
                        <?php if(isset($plans_items['garages'] ) || isset($plans_items['stories']) ): ?>
                            <div class="border-t-[1px] border-b-[1px] border-simms-gold py-3">
                                <div class="flex flex-row w-full justify-start items-center content-center gap-10 sm:gap-14">
                                    
                                    <?php if($plans_items['garages']): ?>
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/garage-icon.png'); ?> "  alt="garages"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]"><?php echo $plans_items['garages']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">garages</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if($plans_items['stories']): ?>
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/stories-icon.png'); ?> "  alt="stories"/>
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]"><?php echo $plans_items['stories']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">Stories</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>



                        <?php if($plans_items['brochure'] ): ?>
                          <div class="border-b-[1px] border-simms-gold">
                            <div class="pb-3 pt-3 flex flex-row justify-start items-center content-center space-x-3">
                              <?php if($plans_items['brochure']): ?>

                                <div class="px-3 flex flex-row items-start text-left gap-1">
                                  <span class="block font-normal text-sm"><i class="fa-solid fa-file-arrow-down text-primary-green text-lg"></i></span>
                                  <span class="text-sm font-medium capitalize block">
                                    <a href="<?php echo e($plans_items['brochure']['url']); ?>" class="hover:text-simms-gold">Download Brochure</a>
                                  </span>
                                </div>
                              <?php endif; ?>
                            </div>
                          </div>
                        <?php endif; ?>

                        <?php if(!empty($plan_communities)): ?>
                            <div class="border-b-[1px] border-simms-gold w-full">
                                <div x-data="{ open: false }" class="inline-flex relative w-full">
                                    <button @click="open = ! open" class="px-3 pb-2 pt-2 w-full flex flex-row justify-between items-center text-white  bg-primary-green">
                                        <span>Where can I find this Plan?</span>
                                        <span class="select-none inset-y-0  flex items-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div x-cloak x-show="open" @click.away="open = false" class="w-full absolute z-50 top-[40px] left-0 bg-white shadow">
                                        <?php $__currentLoopData = $plan_communities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($comm['permalink']); ?>" class=" block py-1 px-2 cursor-pointer hover:bg-simms-gold">
                                                <span><?php echo e($comm['title']); ?></span>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php if($plans_items['price']): ?>
                    <div class="py-2">
                        <div class="">
                            <div>
                                <span class="font-semibold text-primary-green text-lg block">Starting at  <?php echo App\format_currency($plans_items['price']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                
                <?php if(!empty($plans_items['features'])): ?>
                    <div class="py-2">
                        <ul>
                            <?php $__currentLoopData = $plans_items['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex flex-row w-full items-center content-center justify-start text-sm xl:text-base space-x-2 pb-2">
                                    <svg id="Component_46_1" data-name="Component 46 – 1" xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                        <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#cec778"/>
                                    </svg>
                                    <span><?php echo e($amenity['plan_feature']); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>



                
                <div class="py-3">
                    <?php if (isset($component)) { $__componentOriginalf694267422cef110a74088f48ba07e26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf694267422cef110a74088f48ba07e26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-form-modal','data' => ['class' => 'bg-white border-[2px] text-[14px] border-[#002829] py-2 hover:bg-simms-gold transition duration-75 ease-in-out']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact-form-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white border-[2px] text-[14px] border-[#002829] py-2 hover:bg-simms-gold transition duration-75 ease-in-out']); ?>
                         <?php $__env->slot('button_text', null, []); ?> 
                            SCHEDULE A TOUR
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf694267422cef110a74088f48ba07e26)): ?>
<?php $attributes = $__attributesOriginalf694267422cef110a74088f48ba07e26; ?>
<?php unset($__attributesOriginalf694267422cef110a74088f48ba07e26); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf694267422cef110a74088f48ba07e26)): ?>
<?php $component = $__componentOriginalf694267422cef110a74088f48ba07e26; ?>
<?php unset($__componentOriginalf694267422cef110a74088f48ba07e26); ?>
<?php endif; ?>
                </div>
            </div>
        </div>

        
        <div class="lg:w-1/2 xl:w-[55%]">
            <?php if($gallery['slider_gallery']): ?>
                <div>
                    <div class="lg:mb-4 xl:mb-2.5">
                        <?php if (isset($component)) { $__componentOriginalb005da87b8a05b5686a4709fd2d97a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb005da87b8a05b5686a4709fd2d97a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-page-gallery','data' => ['gallery' => $gallery['slider_gallery']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-page-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['gallery' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery['slider_gallery'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb005da87b8a05b5686a4709fd2d97a43)): ?>
<?php $attributes = $__attributesOriginalb005da87b8a05b5686a4709fd2d97a43; ?>
<?php unset($__attributesOriginalb005da87b8a05b5686a4709fd2d97a43); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb005da87b8a05b5686a4709fd2d97a43)): ?>
<?php $component = $__componentOriginalb005da87b8a05b5686a4709fd2d97a43; ?>
<?php unset($__componentOriginalb005da87b8a05b5686a4709fd2d97a43); ?>
<?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>


<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/plans/overview.blade.php ENDPATH**/ ?>