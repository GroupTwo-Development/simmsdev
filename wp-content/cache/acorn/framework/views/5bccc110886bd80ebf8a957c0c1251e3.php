

<?php if($communities_items['point_of_interest']): ?>
    <section id="pointsofinterest" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="py-16 lg:py-16 xl:py-20  w-full">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl  text-center mb-10 lg:mb-16">Points of Interest</h2>
                
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-3 w-full">
                    <?php $__currentLoopData = $communities_items['point_of_interest']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex flex-col justify-center items-center content-center mb-10">
                            <div class="mb-5">
                                <img src="<?php echo e($interest['poi_icon_image']['sizes']['thumbnail']); ?>" alt="<?php echo e($interest['poi_icon_image']['alt']); ?>" class="bg-cover object-contain w-[60px]">
                            </div>
                            <div>
                                <h4 class="text-center text-primary-green tracking-[0.15em] font-semibold mb-3 uppercase"><?php echo e($interest['pot_title']); ?></h4>
                                <div class="text-sm">
                                    <?php echo $interest['poi_description']; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
        </div>
    </section>
<?php endif; ?>

<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/point-of-interest.blade.php ENDPATH**/ ?>