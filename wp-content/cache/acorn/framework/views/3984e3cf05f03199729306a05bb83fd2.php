<?php if($aboutUsContent): ?>
    <section id="description">
        
        <div class="bg-primary-green relative pt-14 xl:pt-20 pb-16 lg:pb-24  overflow-hidden">
            <div class="container mx-auto">
                <div class="text-white text-center xl:max-w-screen-lg mx-auto">
                    <?php if($aboutUsContent['title']): ?>
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2"><?php echo $aboutUsContent['sub_title']; ?></span>
                    <?php endif; ?>
                    <?php if($aboutUsContent['title']): ?>
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $aboutUsContent['title']; ?></h1>
                    <?php endif; ?>
                    <?php if($aboutUsContent['description']): ?>
                        <div>
                            <?php echo $aboutUsContent['description']; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($aboutUsSectionOne): ?>
    <section id="section_one" class="bg-cover object-cover relative lg:mt-36" style="background-image: url('<?php echo e($aboutUsSectionOne['background_image']); ?>')">
        <div class="container mx-auto py-10 ">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full lg:-mt-28 xl:-mt-36 lg:mb-10 xl:max-w-screen-lg xl:mx-auto">
                
                <?php if($aboutUsSectionOne['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $aboutUsSectionOne['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-img">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($aboutUsSectionOne['description']): ?>
                    <div class="text-center lg:text-left bg-[#E5EFF0] py-10 md:py-12  px-8 md:px-16 lg:w-1/2 flex flex-col justify-center items-center">
                        <div>
                            <div>
                                <?php if($aboutUsSectionOne['title']): ?>
                                    <span class="font-agenda  text-sm uppercase tracking-[0.15em] text-primary-green font-semibold block mb-2"><?php echo $aboutUsSectionOne['sub_title']; ?></span>
                                <?php endif; ?>
    
                                <?php if($aboutUsSectionOne['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $aboutUsSectionOne['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <div>
                                <?php echo $aboutUsSectionOne['description']; ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($aboutUsSectionTwo): ?>
    <section id="elevations" class="relative object-cover mt-1 w-full about-sec-two" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto py-10 lg:py-28">
            
            <div class=" flex flex-col lg:flex-row lg:justify-center items-center w-full  xl:max-w-screen-xl xl:mx-auto">
                
                <?php if($aboutUsSectionTwo['description']): ?>
                    <div class="text-center lg:text-left bg-white py-10 md:py-12  px-8 md:px-16 lg:w-1/2 relative shadow-lg lg:h-[400px] xl:h-[450px] lg:mx-0 lg:-mr-14 z-10 flex flex-col justify-center items-center">
                        <div class="">
                            <div class="">
                                <?php if($aboutUsSectionTwo['sub_title']): ?>
                                    <span class="font-agenda  text-sm uppercase tracking-[0.15em] text-primary-green font-semibold block mb-2"><?php echo $aboutUsSectionTwo['sub_title']; ?></span>
                                <?php endif; ?>
    
                                <?php if($aboutUsSectionTwo['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $aboutUsSectionTwo['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <div>
                                <?php echo $aboutUsSectionTwo['description']; ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($aboutUsSectionTwo['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative lg:h-[500px] xl:h-[600px]">
                        <?php
                        // Get image ID
                        $image_id = $aboutUsSectionTwo['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-img">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($aboutUsSectionThree): ?>
    <section id="section_one" class="bg-cover bg-primary-green object-cover relative z-40" style="background-image: url('<?= \Roots\asset('images/pattern1.png'); ?>')">
        <div class="container mx-auto py-10 lg:py-14 xl:py-20">
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full xl:max-w-screen-lg xl:mx-auto">
                
                <?php if($aboutUsSectionThree['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $aboutUsSectionThree['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-img">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>

                
                <?php if($aboutUsSectionThree['description']): ?>
                    <div class="text-center lg:text-left bg-simms-gold py-10 md:py-12  px-8 md:px-16 lg:w-1/2">
                        <div>
                            <?php if($aboutUsSectionThree['title']): ?>
                                <span class="font-agenda  text-sm uppercase tracking-[0.15em] text-[#002829] font-semibold block mb-2"><?php echo $aboutUsSectionThree['sub_title']; ?></span>
                            <?php endif; ?>

                            <?php if($aboutUsSectionThree['title']): ?>
                                <h2 class="font-arno_pro_subhead font-normal text-white text-3xl md:text-4xl mb-5"><?php echo $aboutUsSectionThree['title']; ?></h2>
                            <?php endif; ?>
        
                        </div>
                        <div>
                            <?php echo $aboutUsSectionThree['description']; ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($aboutUsSectionFour): ?>
    <section id="section_one" class="bg-cover object-cover relative object-center  xl:h-[400px]" style="background-image: url('<?php echo e($aboutUsSectionFour['background_image']); ?>')">
        <div class="container mx-auto pt-10 xl:pt-28">
            <div class="absolute inset-0 bg-[rgba(255,255,255,0.75)]"></div>
            <div class="bg-white shadow-lg flex flex-col lg:flex-row lg:justify-center w-full  xl:max-w-screen-xl xl:mx-auto z-10 overflow-hidden relative">

                
                <?php if($aboutUsSectionFour['description']): ?>
                    <div class="text-center lg:text-left bg-secondary-green py-10 md:py-12  px-8 xl:py-10 md:px-16 lg:w-1/2 flex flex-col justify-center items-center">
                        <div>
                            <div>
                                <?php if($aboutUsSectionFour['title']): ?>
                                <span class="font-agenda  text-sm uppercase tracking-[0.15em] text-simms-gold font-semibold block mb-2"><?php echo $aboutUsSectionFour['sub_title']; ?></span>
                                <?php endif; ?>
    
                                <?php if($aboutUsSectionFour['title']): ?>
                                    <h2 class="font-arno_pro_subhead font-normal text-3xl text-white md:text-3xl mb-5"><?php echo $aboutUsSectionFour['title']; ?></h2>
                                <?php endif; ?>
            
                            </div>
                            <div class="text-white">
                                <?php echo $aboutUsSectionFour['description']; ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if($aboutUsSectionFour['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $aboutUsSectionFour['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-img">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($aboutUsSectionFive): ?>
    <section id="elevations" class="relative object-cover pt-14 xl:pt-56 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto py-10 lg:py-14">
            
            <div class=" flex flex-col lg:flex-row lg:justify-center items-center w-full  xl:max-w-screen-xl xl:mx-auto">
              

                
                <?php if($aboutUsSectionFive['image']): ?>
                    <div class="flex justify-center items-center lg:w-1/2 relative">
                        <?php
                        // Get image ID
                        $image_id = $aboutUsSectionFive['image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="h-full w-full section-img ">
                            <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                        </div>
                    </div>
                <?php endif; ?>

                  
                  <?php if($aboutUsSectionFive['description']): ?>
                  <div class="text-center lg:text-left bg-white py-10 md:py-12  px-8 md:px-16 lg:w-1/2 relative shadow-lg lg:h-[400px] lg:mx-0 lg:-ml-14 z-10 flex flex-col justify-center items-center">
                      <div class="lg:h-[410px] flex flex-col justify-center">
                          <div class="">
                              <?php if($aboutUsSectionFive['sub_title']): ?>
                                <span class="font-agenda  uppercase tracking-[0.15em] text-sm text-primary-green text-left font-semibold block mb-2"><?php echo $aboutUsSectionFive['sub_title']; ?></span>
                              <?php endif; ?>
  
                              <?php if($aboutUsSectionFive['title']): ?>
                                  <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-3xl mb-5"><?php echo $aboutUsSectionFive['title']; ?></h2>
                              <?php endif; ?>
                          </div>
                          <div>
                              <?php echo $aboutUsSectionFive['description']; ?>

                          </div>
                      </div>
                  </div>
              <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if($aboutUsTeam): ?>
    <section id="elevations" class="relative object-cover pt-14  w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <?php if($aboutUsTeam['title']): ?>
                <div class="text-center pb-5 xl:pb-10">
                    <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $aboutUsTeam['title']; ?></h2>
                </div>
            <?php endif; ?>

            
            <?php if($aboutUsTeam['team_members']): ?>
                <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
                    <?php $__currentLoopData = $aboutUsTeam['team_members']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white shadow-lg mb-10">
                            <?php
                            // Get image ID
                            $image_id = $team['photo'];
                            
                            // Get the alt text of the image
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            ?>
                            <div class="team-photo">
                                <?php echo wp_get_attachment_image($image_id, 'large', false, ['alt' => $image_alt], ['class' => 'w-full h-full']); ?>

                            </div>
                            <div class="py-5 px-5">
                                <h3 class="font-arno_pro_subhead text-[#534E50] text-2xl"><?php echo $team['name']; ?></h3>
                                <span class="text-[#00676d] block mb-2"><?php echo $team['title']; ?></span>
                                <div>
                                    <?php echo $team['bio']; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        <div>
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
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-about.blade.php ENDPATH**/ ?>