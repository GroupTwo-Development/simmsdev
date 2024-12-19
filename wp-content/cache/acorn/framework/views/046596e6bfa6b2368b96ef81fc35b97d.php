<?php if($communities_items['location']): ?>
    <section id="location">
        
        <div class="lg:flex lg:flex-row lg:justify-between w-full">
            
            <?php if($communities_items['location']): ?>
                <div class="lg:w-1/2 lg:h-full">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo e($communities_items['location']['latitude']); ?>" data-lng="<?php echo e($communities_items['location']['longitude']); ?>"></div>
                      </div>
                </div>
            <?php endif; ?>
            
            
            <div class="lg:w-1/2">

                <div class="relative object-cover w-full bg-primary-green insert" style="background-image: url('<?= \Roots\asset('assets/pattern3.png'); ?>')">
                    <div class="container mx-auto">
                        <div class="py-10 sm:py-12 lg:pl-10">
                            <h2 class="text-white font-arno_pro_subhead font-[400] text-3xl mb-2">Map & Directions</h2>
                            <h4 class="text-simms-gold text-2xl font-arno_pro_subhead"><?php echo e($title); ?></h4>
                            <span class="text-sm font-[500] text-white"><?php echo e($communities_items['city'] . ', ' . $communities_items['state']); ?></span>
        
                            <h5 class="mt-4 mb-2 font-arno_pro_subhead text-simms-gold text-2xl">Questions? We can help!</h5>
                         
                            <?php if($sales_agent): ?>
                              <div>
                                
                                <div class="text-white">
                                    <span class="capitalize font-normal">Sales Agent |</span>
                                    <span class="text-simms-gold font-normal"><?php echo e($sales_agent['name']); ?></span>
                                </div>
                                <div class="text-white">
                                    <?php if($sales_agent['phone']): ?>
                                        <span class="capitalize font-normal">Phone: <a href="tel:<?php echo e(App\clean_phone_number($sales_agent['phone'])); ?>" class="text-simms-gold font-normal"> <?php echo e(App\format_phone_number($sales_agent['phone'] )); ?></a></span>
                                    <?php endif; ?>
    
                                    <?php if($sales_agent['email']): ?>
                                        <span class="block">Email: <a href="mailto:<?php echo e($sales_agent['email']); ?>" class="text-simms-gold font-normal"><?php echo e($sales_agent['email']); ?></a></span>
                                    <?php endif; ?>
                                </div>
                              </div>
                            <?php endif; ?>
    
                            
                            <?php if($communities_items['hours']): ?>
                                <div class="py-4 text-white">
                                    <h5 class="text-white text-lg">Hours</h5>
                                    <div>
                                        <span class="font-[300]"><?php echo $communities_items['hours']; ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
    
                            <div class="pb-3 text-white">
                                <span>Our model homes are open for walk-ins and appointments.</span>
                            </div>
    
                            <?php if (isset($component)) { $__componentOriginalf694267422cef110a74088f48ba07e26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf694267422cef110a74088f48ba07e26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-form-modal','data' => ['class' => 'bg-transparent border-[2px] text-[14px] border-white py-2 hover:bg-simms-gold transition duration-75 ease-in-out text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>

                <div class="relative object-cover w-full lg:min-h-[517px] bg-primary-green insert flex flex-col justify-center h-full" style="background-image: url('<?= \Roots\asset('assets/pattern3.png'); ?>')">
                    <div>
                        <div class="container mx-auto">
                            <div class="py-10 sm:py-12 lg:pl-10">
                                <h2 class="text-white font-arno_pro_subhead font-[400] text-3xl mb-2">Map & Directions</h2>
                                <h4 class="text-simms-gold text-2xl font-arno_pro_subhead"><?php echo e($title); ?></h4>
                                <span class="text-sm font-[500] text-white"><?php echo e($communities_items['city'] . ', ' . $communities_items['state']); ?></span>
            
                                <h5 class="mt-4 mb-2 font-arno_pro_subhead text-simms-gold text-2xl">Questions? We can help!</h5>
                             
                                <?php if($sales_agent): ?>
                                  <div>
                                    
                                    <div class="text-white">
                                        <span class="capitalize font-normal">Sales Agent |</span>
                                        <span class="text-simms-gold font-normal"><?php echo e($sales_agent['name']); ?></span>
                                    </div>
                                    <div class="text-white">
                                        <?php if($sales_agent['phone']): ?>
                                            <span class="capitalize font-normal">Phone: <a href="tel:<?php echo e(App\clean_phone_number($sales_agent['phone'])); ?>" class="text-simms-gold font-normal"> <?php echo e(App\format_phone_number($sales_agent['phone'] )); ?></a></span>
                                        <?php endif; ?>
        
                                        <?php if($sales_agent['email']): ?>
                                            <span class="block">Email: <a href="mailto:<?php echo e($sales_agent['email']); ?>" class="text-simms-gold font-normal"><?php echo e($sales_agent['email']); ?></a></span>
                                        <?php endif; ?>
                                    </div>
                                  </div>
                                <?php endif; ?>
        
                                
                                <?php if($communities_items['hours']): ?>
                                    <div class="py-4 text-white">
                                        <h5 class="text-white text-lg">Hours</h5>
                                        <div>
                                            <span class="font-[300]"><?php echo $communities_items['hours']; ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
        
                                <div class="pb-3 text-white lg:py-6 xl:py-8">
                                    <span>Our model homes are open for walk-ins and appointments.</span>
                                </div>
        
                                <?php if (isset($component)) { $__componentOriginalf694267422cef110a74088f48ba07e26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf694267422cef110a74088f48ba07e26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-form-modal','data' => ['class' => 'bg-transparent border-[2px] text-base border-white py-2 hover:border-simms-gold hover:text-black hover:bg-simms-gold transition duration-75 ease-in-out text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>

<?php $component->withName('contact-form-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>

<?php $component->withAttributes(['class' => 'bg-transparent border-[2px] text-[14px] border-white py-2 hover:bg-simms-gold transition duration-75 ease-in-out text-white']); ?>
                                 <?php $__env->slot('button_text', null, []); ?> 
                                    SCHEDULE A TOUR
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>

<?php $component->withAttributes(['class' => 'bg-transparent border-[2px] text-base border-white py-2 hover:border-simms-gold hover:text-black hover:bg-simms-gold transition duration-75 ease-in-out text-white']); ?>
                                     <?php $__env->slot('button_text', null, []); ?> 
                                        SCHEDULE A TOUR
                                     <?php $__env->endSlot(); ?>
                                 <?php echo $__env->renderComponent(); ?>
main
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
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/location.blade.php ENDPATH**/ ?>