
    <section id="overview" class="lg:flex lg:flex-row w-full lg:justify-between lg:items-start">
        
        <div class="container mx-auto mt-10 mb-5 lg:w-1/2 xl:w-[45%]">
            <div class="container mx-auto">
                <div class="relative w-full">
                    <div class="pb-3">
                        <?php if($communities_items['plan_add_marketing_toggle'] == 'yes'): ?>
                             <span class="text-primary-green font-semibold tracking[0.15em] uppercase text-sm block mb-2"><?php echo e($communities_items['plan_marketing_headline']); ?></span>
                        <?php endif; ?>
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl"><?php echo e($title); ?></h1>
                        <span class="text-sm font-[300]">
                            <?php echo e($communities_items['address'] . ', ' . $communities_items['city'] . ', ' . $communities_items['state'] . ' ' . $communities_items['postal_code']); ?>

                        </span>
                    </div>
    
                    
                    <div class="md:mr-80 lg:mr-1 2xl:mr-16">
                        <?php if(isset($floorplan_item['min_beds'] ) || isset($floorplan_item['min_bath']) || isset($communities_items['min_sqft']) || isset($floorplan_item['baths'])): ?>
                            <div class="border-t-[1px] border-simms-gold">
                                <div class="py-3 flex flex-row justify-between sm:justify-start items-center content-center gap-1 sm:gap-14 ">
                                    <?php if(isset($floorplan_item['min_beds'])): ?>
                                        <div class="flex flex-row  md:flex-row lg:flex-row xl:flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bbeds-icon.png'); ?> " /> 
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo e(isset($floorplan_item['min_beds'])); ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Beds</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(isset($floorplan_item['min_bath']) && isset($floorplan_item['max_bath'])): ?>
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bathroom-icon.png'); ?> " /> 
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo ($floorplan_item['max_beds'] > $floorplan_item['min_beds'] ) ? ($floorplan_item['min_bath'] . '<i class="text-[12px]">+</i>') : $floorplan_item['min_bath']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">Baths</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                    <?php if($communities_items['min_sqft'] &&  $communities_items['max_sqft'] ): ?>
                                        <div class="flex flex-row  gap-2 items-center content-center">
                                            <img class="bg-cover object-cover " src="<?= \Roots\asset('images/size-icon.png'); ?> " /> 
                                            <div>
                                                <span class="text-sm font-[500]"><?php echo ($communities_items['max_sqft'] > $communities_items['min_sqft'] ) ? ($communities_items['min_sqft'] . '<i class="text-[12px]">+</i>') : $communities_items['min_sqft']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em]">SQ FT</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        <?php endif; ?>
    
                        
                        <?php if(isset($floorplan_item['min_garages'] ) || isset($floorplan_item['min_stories'])): ?>
                            <div class="border-t-[1px] border-b-[1px] border-simms-gold py-3">
                                <div class="flex flex-row w-full justify-start items-center content-center gap-10 sm:gap-14">
                                    
                                    <?php if($floorplan_item['min_garages']): ?>
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/garage-icon.png'); ?> " /> 
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]"><?php echo ($floorplan_item['max_garages'] > $floorplan_item['min_garages'] ) ? ($floorplan_item['min_garages'] . '<i class="text-[12px]">-</i>' .$floorplan_item['max_garages']  ) : $floorplan_item['min_garages']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">garages</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if($floorplan_item['min_stories']): ?>
                                        <div class="flex flex-row items-start space-x-2">
                                            <img class="bg-cover object-cover" src="<?= \Roots\asset('images/stories-icon.png'); ?> " /> 
                                            <div class="flex flex-row w-full">
                                                <span class="text-sm font-[500]"><?php echo ($floorplan_item['max_stories'] > $floorplan_item['min_stories'] ) ? ($floorplan_item['min_stories'] . '<i class="text-[12px]">-</i>' .$floorplan_item['max_stories']  ) : $floorplan_item['min_stories']; ?></span>
                                                <span class="text-sm font-[500] uppercase tracking-[0.06em] ml-0.5">Stories</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($communities_items['downloadable_brochure'] ): ?>
                            <div class="border-b-[1px] border-simms-gold">
                            <div class="pb-3 pt-3 flex flex-row justify-start items-center content-center space-x-3">
                                <?php if($communities_items['downloadable_brochure']): ?>

                                <div class=" flex flex-row items-start text-left gap-1">
                                    <span class="block font-normal text-sm"><i class="fa-solid fa-file-arrow-down text-simms-lime text-lg"></i></span>
                                    <span class="text-sm font-medium capitalize block">
                                    <a href="<?php echo e($communities_items['downloadable_brochure']['url']); ?>" class="hover:text-simms-gold">Download Brochure</a>
                                    </span>
                                </div>
                                <?php endif; ?>
                            </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php if($communities_items['min_price']): ?>
                    <div class="py-2">
                        <div class="">
                            <div>
                                <span class="font-semibold text-primary-green text-lg block">Starting at <?php echo App\format_currency($communities_items['min_price']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
    
                
                <?php if($amenities): ?>
                    <div class="py-2">
                            <ul>
                                <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="flex flex-row w-full items-center content-center justify-start text-sm xl:text-base space-x-2 pb-2">
                                        <svg id="Component_46_1" data-name="Component 46 – 1" xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                            <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#cec778"/>
                                        </svg>
                                        <span><?php echo e($amenity); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        
                    </div>
                <?php endif; ?>
    
                
                <?php if($communities_items['hours']): ?>
                    <div class="py-2">
                        <h5 class="text-primary-green font-semibold text-lg">Hours</h5>
                        <div>
                            <span class="font-[300]"><?php echo $communities_items['hours']; ?></span>
                        </div>
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


<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/overview.blade.php ENDPATH**/ ?>