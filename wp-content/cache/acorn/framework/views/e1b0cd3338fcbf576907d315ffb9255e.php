<div class="relative object-cover w-full pt-10 pb-5  lg:pt-20" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">
    
    <div class="container mx-auto">
        
        <section class="lg:flex lg:flex-col lg:justify-center w-full">
       
            
            <?php if($introContent['form_contact']): ?>
                <div class="mt-10 lg:mt-0 lg:max-w-screen-lg mx-auto  contact-page-form bg-white p-10">
                    <div class="w-full">
                        <h2 class="font-semibold font-arno_pro_subhead mb-5 text-center text-lg lg:text-2xl xl:text-3xl"><?php echo $introContent['title_contact_form']; ?></h2>
                        <div>
                            <?php echo $introContent['form_contact']; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>


        <?php if(!empty($introContent['sales_representative'])): ?>
            <?php
                $salesReps = $introContent['sales_representative'];
                $isSingleCard = count($salesReps) === 1;
            ?>
            <section class="mt-16 lg:mt-36">
                <h2 class="text-center mb-10 font-semibold font-arno_pro_subhead text-xl md:text-2xl lg:text-3xl xl:text-4xl"><?php echo e($introContent['Section_Title']); ?></h2>

                <div class="flex flex-row justify-center items-center gap-5">
                    <?php $__currentLoopData = $salesReps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salesRep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white shadow-lg flex flex-col h-full sm:w-1/2 lg:w-1/3 xl:w-1/3">
                            <div class="w-full h-64 lg:h-80 overflow-hidden">
                                <?php
                                    // Get image ID
                                    $image_id = $salesRep['image'];
                                    
                                    // Get the alt text of the image
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                ?>
                                <?php echo wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt, 'class' => 'h-full w-full object-left-top object-cover']); ?>

                            </div>
                            <div class="flex-grow py-5 px-4 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-arno_pro_subhead capitalize font-semibold text-lg text-[#707070]"><?php echo e($salesRep['name']); ?></h3>
                                    <p class="font-[300] text-primary-green capitalize"><?php echo e($salesRep['position']); ?></p>
                                </div>
                                <div class="mt-3">
                                    <span class="text-primary-green capitalize block"><?php echo e($salesRep['community_name']); ?></span>
                                    <?php if($salesRep['email']): ?>
                                        <span class="block">Email: <a href="mailto:<?php echo e($salesRep['email']); ?>" class="underline text-simms-gold"><?php echo e($salesRep['email']); ?></a></span>
                                    <?php endif; ?>

                                    <?php if($salesRep['phone']): ?>
                                        <span class="block">Phone: <a href="tel:<?php echo e($salesRep['phone']); ?>" class="text-simms-gold underline"><?php echo e(App\format_phone_number($salesRep['phone'])); ?></a></span>
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