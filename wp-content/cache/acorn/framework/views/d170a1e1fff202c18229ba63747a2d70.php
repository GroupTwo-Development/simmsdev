<?php if($featuredTestimonialsContent): ?>
   <section class="relative bg-cover object-cover py-16 inset-0 " style="background-image:url('<?php echo e($featuredTestimonialsContent['bg_image']); ?>')">
     <!-- Overlay -->
     <div class="absolute inset-0 bg-[rgba(255,255,255,0.63)]"></div>
        <div class="container mx-auto relative">
            
            <div class="relative lg:flex lg:flex-row lg:justify-center lg:items-center w-full">
                
                <div class="lg:w-1/2">
                    <div class="h-full  w-full section_three_img relative">
                        <?php
                        // Get image ID
                        $image_id = $featuredTestimonialsContent['feature_image'];
                        
                        // Get the alt text of the image
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <?php echo wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]); ?>

                    </div>
                </div>
                
                <div class="bg-[rgba(0,40,41,0.9)] lg:w-1/2 py-12 px-4 lg:py-2 flex flex-col justify-center h-[450px] lg:-ml-16 xl:-ml-20 2xl:-ml-28 z-10">
                    <?php if($feature_testimonials): ?>
                        <div class="">
                            <span class="text-simms-gold font-semibold tracking-[0.15em] uppercase text-center text-sm block mb-4">The marketing headline is (42) characters.</span>
                            <h4 class="font-normal text-white text-2xl lg:text-3xl xl:text-3xl mb-3 font-arno_pro_subhead lg:px-14 text-center">This headline can be forty 40 characters</h4>
                            <div>
                                <div class="swiper featureTestimonials">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $feature_testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <div class="sm:px-10 md:px-16">
                                                   <blockquote class="text-white text-center">
                                                        <?php echo $testimonial['testimonial']; ?>

                                                         <cite><?php echo e($testimonial['name']); ?></cite>  
                                                   </blockquote>

                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next bg-primary-green rounded-full h-[28px] w-[28px] flex items-center justify-center">
                                        <svg id="Component_47_1" data-name="Component 47 – 1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                            <g id="Group_586" data-name="Group 586" transform="translate(35 34.875) rotate(180)">
                                              <circle id="Ellipse_153" data-name="Ellipse 153" cx="17.5" cy="17.5" r="17.5" transform="translate(0 -0.125)" fill="#CEC778"/>
                                              <path id="Polygon_2" data-name="Polygon 2" d="M8.5,0,17,15H0Z" transform="translate(8 25.875) rotate(-90)" fill="#002829"/>
                                            </g>
                                          </svg>
                                          
                                      </div>
                                    <div class="swiper-button-prev  rounded-full h-7 w-7">
                                        <svg id="Component_48_1" data-name="Component 48 – 1" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                            <g id="Group_323" data-name="Group 323" transform="translate(0 0.125)">
                                              <path id="Path_11959" data-name="Path 11959" d="M17.5,0A17.5,17.5,0,1,1,0,17.5,17.5,17.5,0,0,1,17.5,0Z" transform="translate(0 -0.125)" fill="#CEC778"/>
                                              <path id="Polygon_2" data-name="Polygon 2" d="M8.5,0,17,15H0Z" transform="translate(8 25.875) rotate(-90)" fill="#002829"/>
                                            </g>
                                          </svg>
                                    </div>
                                </div>
                            </div>

                          
                           <div class="text-center mt-5">
                            <?php if (isset($component)) { $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $attributes; } ?>
<?php $component = App\View\Components\CtaLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/testimonials','class' => 'text-white mt-3 md:mt-5 hover:text-simms-gold hover:border-simms-gold transition-all ease-in-out']); ?>READ MORE REVIEWS <?php echo $__env->renderComponent(); ?>
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

                    <?php endif; ?>
                </div>
            </div>
        </div>
   </section> 
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/testimonials/featured-testimonials.blade.php ENDPATH**/ ?>