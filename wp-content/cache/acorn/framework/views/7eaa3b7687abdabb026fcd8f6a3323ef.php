<?php if($energyPageContent): ?>
    <section id="description">
        
        <div class="bg-light-green relative pt-14 xl:pt-6 lg:pt-8 pb-16 lg:pb-24 overflow-hidden text-black">
            <div class="container mx-auto">
                <div class="text-center xl:max-w-screen-lg mx-auto lg:pt-12">
                    <?php if($energyPageContent['title']): ?>
                        <span class="text-[#00676d] text-sm uppercase font-semibold tracking-[0.06em] block mb-2"><?php echo $energyPageContent['sub_title']; ?></span>
                    <?php endif; ?>
                    <?php if($energyPageContent['title']): ?>
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5 text-[#002829]"><?php echo $energyPageContent['title']; ?></h1>
                    <?php endif; ?>
                    <?php if($energyPageContent['description']): ?>
                        <div>
                            <?php echo $energyPageContent['description']; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if($energySectionOne): ?>
    <section id="section_one" class="bg-cover bg-primary-green object-cover relative z-40" style="background-image: url('<?= \Roots\asset('images/pattern1.png'); ?>')">
        <div class="container mx-auto py-10 lg:py-14 xl:py-20">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full xl:max-w-screen-xl xl:mx-auto">
                
                <?php if($energySectionOne['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $energySectionOne['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full ee-section-one">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($energySectionOne['description']): ?>
                    <div class="text-center lg:text-left bg-simms-gold py-10 md:py-12 px-8 md:px-10 lg:px-8 lg:w-1/2">
                        <div class="text-left">
                            <?php if($energySectionOne['title']): ?>
                                <span class="font-agenda text-sm uppercase tracking-[0.15em] text-[#002829] font-semibold block mb-2"><?php echo $energySectionOne['sub_title']; ?></span>
                            <?php endif; ?>

                            <?php if($energySectionOne['title']): ?>
                                <h2 class="font-arno_pro_subhead font-normal text-white text-3xl md:text-4xl mb-5"><?php echo $energySectionOne['title']; ?></h2>
                            <?php endif; ?>
        
                        </div>
                        <?php if($energySectionOne['description']): ?>
                            <ul>
                                <?php $__currentLoopData = $energySectionOne['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="flex flex-row items-start gap-2 mb-4"><i><svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                        <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#fff"/>
                                      </svg>
                                      </i> <span class="block text-left"><?php echo e($item['s1_highlights']); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                        
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($energySectionTwo): ?>
    <section id="section_one" class="bg-cover ee-sec-two object-cover relative object-center ee-section-two lg:h-[350px]  xl:h-[400px] pb-20" style="background-image: url('<?php echo e($energySectionTwo['background_image']); ?>')">
        <div class="absolute inset-0 bg-white bg-opacity-[0.75] z-10"></div>
        <div class="container mx-auto pt-10 xl:pt-28 relative z-20">
            <div class=" flex flex-col lg:flex-row lg:justify-center xl:items-center w-full  xl:max-w-screen-xl xl:mx-auto z-10 overflow-hidden relative">

                
                <?php if($energySectionTwo['description']): ?>
                    <div class="text-center relative shadow-lg  lg:text-left bg-[rgba(0,40,41,0.9)] py-10 md:py-12 xl:h-[500px]  px-8 xl:py-10 md:px-16 xl:-mr-28 z-20 lg:w-1/2">
                       <div>
                            <div>
                                <?php if($energySectionTwo['title']): ?>
                                <span class="font-agenda text-sm uppercase tracking-[0.15em] text-simms-gold font-semibold block mb-2"><?php echo $energySectionTwo['sub_title']; ?></span>
                                <?php endif; ?>

                                <?php if($energySectionTwo['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl text-white md:text-3xl mb-5"><?php echo $energySectionTwo['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <?php if($energySectionTwo['description']): ?>
                                <ul class="text-white">
                                    <?php $__currentLoopData = $energySectionTwo['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="flex flex-row items-baseline justify-center gap-2 mb-4">
                                            <svg id="Component_50_1" data-name="Component 50 – 1" xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                                <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#cec778"/>
                                              </svg>
                                              
                                            <span class="block text-left"><?php echo e($item['s2_highlights']); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                       </div>
                    </div>
                <?php endif; ?>
                
                <?php if($energySectionTwo['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 xl:h-[600px] relative">
                        <?php
                        // Get image ID
                        $image_id = $energySectionTwo['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full ">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>



<?php if($energySectionThree): ?>
    <section id="section_one" class="bg-cover relative object-cover pt-16 lg:pt-96" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
         <!-- Background Image with Overlay -->
         <div class="lg:h-[400px] absolute bottom-0 w-full">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo e($energySectionThree['background_image']); ?>')"></div>
            <!-- Overlay -->
            <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
        </div>
        <div class="container mx-auto py-10 lg:py-32 relative z-20">
            <div class="flex flex-col lg:flex-row lg:justify-center xl:items-center w-full xl:max-w-screen-xl xl:mx-auto z-10 overflow-hidden relative">
                
                <?php if($energySectionThree['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 xl:h-[600px] relative">
                        <?php
                        // Get image ID
                        $image_id = $energySectionThree['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-image-h">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($energySectionThree['description']): ?>
                    <div class="text-center lg:text-left lg:flex lg:flex-col lg:justify-center bg-white text-black  relative py-10 md:py-12 xl:h-[400px]  px-8 xl:py-10 md:px-16 xl:-ml-28 z-20 lg:w-1/2">
                        <div>
                            <div>
                                <?php if($energySectionThree['title']): ?>
                                    <span class="font-agenda text-sm uppercase tracking-[0.15em] text-primary-green font-semibold block mb-2"><?php echo $energySectionThree['sub_title']; ?></span>
                                <?php endif; ?>
    
                                <?php if($energySectionThree['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $energySectionThree['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <?php if($energySectionThree['description']): ?>
                                <ul>
                                    <?php $__currentLoopData = $energySectionThree['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="flex flex-row items-center gap-2 mb-4"><i><svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                            <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#CEC778"/>
                                        </svg>
                                        </i> <span class="block text-left"><?php echo e($item['s3_highlights']); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($energySectionFour): ?>
    <section id="elevations" class="relative object-cover pt-14 xl:pt-32 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto py-10 lg:py-14 xl:pb-28">
            
            <div class="flex flex-col lg:flex-row lg:justify-center xl:items-center w-full  xl:max-w-screen-xl xl:mx-auto z-10 overflow-hidden relative">
              
                
                <?php if($energySectionFour['description']): ?>
                    <div class="bg-[#E5EFF0] text-left relative shadow-lg  lg:text-left py-14 md:py-12 xl:h-[450px]  px-8 xl:py-10 md:px-16 xl:-mr-28 z-20 lg:w-1/2">
                        <div>
                            <div class="">
                                <?php if($energySectionFour['sub_title']): ?>
                                    <span class="font-agenda uppercase tracking-[0.15em] text-sm text-primary-green font-semibold block mb-2"><?php echo $energySectionFour['sub_title']; ?></span>
                                <?php endif; ?>

                                <?php if($energySectionFour['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-3xl mb-5"><?php echo $energySectionFour['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <div>
                                <ul>
                                    <?php $__currentLoopData = $energySectionFour['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="flex flex-row items-center gap-2 mb-4"><i><svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13">
                                            <path id="Polygon_3" data-name="Polygon 3" d="M6.5,0,13,11H0Z" transform="translate(11) rotate(90)" fill="#CEC778"/>
                                        </svg>
                                        </i> <span class="block text-left"><?php echo e($item['s4_highlights']); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($energySectionFour['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $energySectionFour['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full sectionfive-img">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


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
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-energy.blade.php ENDPATH**/ ?>