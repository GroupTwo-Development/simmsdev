<div class="relative object-cover w-full pt-10 pb-5  lg:pt-20" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
    
    <div class="container mx-auto">
        
        <section class="lg:flex lg:flex-row lg:justify-center  lg:items-start w-full">
            
            <div class="lg:w-2/6">
                
                <?php if($introContent['address']): ?>
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Simms Development Corporate Office</h2>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo e(urlencode($introContent['address'])); ?>" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="underline font-[500]"
                        >
                            <?php echo $introContent['address']; ?>

                        </a>
                    </div>
                <?php endif; ?>

                <?php if($introContent['business_hours_fields']): ?>
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Business Hours</h2>
                        <p class="font-[300]"><?php echo $introContent['business_hours_fields']; ?></p>
                    </div>
                <?php endif; ?>

                <?php if($introContent['phone'] || $introContent['fax']): ?>
                    <div class="mb-5">
                        <h2 class="text-simms-lime font-semibold mb-1">Office</h2>
                        <a href="tel:<?php echo e(App\clean_phone_number($introContent['phone'] )); ?>" class="lg:text-left transition mt-1 block"><span class=" lg:text-left">Phone:</span>
                            <?php echo e(App\format_phone_number($introContent['phone'] )); ?>

                        </a>

                        <a href="tel:<?php echo e(App\clean_phone_number($introContent['fax'] )); ?>" class="lg:text-left transition block"><span class="lg:text-left">Fax</span>
                            <?php echo e(App\format_phone_number($introContent['fax'] )); ?>

                        </a>
                        
                    </div>
                <?php endif; ?>

                <?php if($quickLinkHeader): ?>
                    <div class="mb-8">
                        <h2 class="text-simms-lime font-semibold mb-1">Follow us</h2>
                        <ul class="flex flex-row justify-start w-full items-start content-start gap-2">
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="<?php echo e($quickLinkHeader['fb']); ?>" target="_blank" class=""><i class="fa-brands fa-facebook-f text-white"></i></a></li>
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="<?php echo e($quickLinkHeader['instagram']); ?>" target="_blank"><i class="fa-brands fa-instagram text-white"></i></a></li>
                            <li class="h-8 w-8 rounded-full bg-primary-green flex flex-col justify-center items-center"><a href="<?php echo e($quickLinkHeader['youtube']); ?>" target="_blank"><i class="fa-brands fa-youtube-square text-white"></i></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <div>
                    <h2 class="text-simms-lime font-semibold mb-3">Sign up for our newsletter</h2>
                    <button type="button" class="bg-primary-green uppercase text-[14px] tracking-[0.1em] text-center lg:text-right text-white inline-block px-5 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out">
                        SUBSCRIBE
                      </button>
                </div>
            </div>
            
            <?php if($introContent['form_contact']): ?>
                <div class="mt-10 lg:mt-0 lg:w-2/3 contact-page-form">
                    <div class="w-full">
                        <h2 class="font-semibold font-arno_pro_subhead mb-5"><?php echo $introContent['title_contact_form']; ?></h2>
                        <div>
                            <?php echo $introContent['form_contact']; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>


        <?php if(!empty($introContent['sales_representative'])): ?>
            <section class="mt-16 lg:mt-36">
                <h2 class="text-center mb-10 font-semibold font-arno_pro_subhead text-xl md:text-2xl lg:text-3xl"><?php echo e($introContent['Section_Title']); ?></h2>

                <div class="sm:flex sm:flex-row sm:justify-center w-full sm:gap-4 md:gap-6">
                    <?php $__currentLoopData = $introContent['sales_representative']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salesRep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex flex-col mb-10 bg-white shadow-lg">
                            <div class="w-full">
                                <?php
                                    // Get image ID
                                    $image_id = $salesRep['image'];
                                    
                                    // Get the alt text of the image
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                ?>
                                <?php echo wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]); ?>

                                
                            </div>
                            <div class="py-5 px-4">
                                <div class="">
                                    <h3 class="font-arno_pro_subhead font-semibold text-lg text-[#707070]"><?php echo e($salesRep['name']); ?></h3>
                                    <p class="font-[300] text-primary-green"><?php echo e($salesRep['position']); ?></p>
                                </div>
                                
                                <div class="mt-3">
                                    <span class="text-primary-green block"><?php echo e($salesRep['community_name']); ?></span>
                                    <?php if($salesRep['email']): ?>
                                        <span class="block">Email: <a href="mailto:<?php echo e($salesRep['email']); ?>"><?php echo e($salesRep['email']); ?></a></span>
                                    <?php endif; ?>
    
                                    <?php if($salesRep['email']): ?>
                                        <span class="block">Phone: <a href="tell:<?php echo e($salesRep['phone']); ?>" class="text-simms-gold underline"><?php echo e(App\format_phone_number($salesRep['phone'] )); ?></a></span>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
            </section>
        <?php endif; ?>
        
    </div>
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
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-contact.blade.php ENDPATH**/ ?>