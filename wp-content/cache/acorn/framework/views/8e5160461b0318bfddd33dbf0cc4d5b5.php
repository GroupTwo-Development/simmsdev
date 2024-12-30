
<div class="relative object-cover w-full pt-10 pb-16 lg:pt-10 xl:pt-16" style="background-image: url('<?= \Roots\asset('images/pattern2.png'); ?>')">


    
    <?php if(!empty($resourcesSectionThree['resource_slider'])): ?>
        <div class="">
            <div class="container mx-auto">
               
                <?php if(!empty($resourcesSectionThree['resource_slider']) && is_array($resourcesSectionThree['resource_slider'])): ?>
                    <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5">
                        <?php $__currentLoopData = $resourcesSectionThree['resource_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="bg-[#E5EFF0] shadow-lg mb-10 px-6 py-14 text-center <?php echo e($index >= 3 ? 'hidden' : ''); ?>">
                                <h3 class="text-[#534E50] font-arno_pro_subhead font-normal mb-5 text-2xl"><?php echo e($resource['offer_title']); ?></h3>
                                <div class="text-base font-normal">
                                    <?php echo $resource['offer_description']; ?>

                                </div>
                                <div class="mt-4">
                                    <span class="text-simms-lime uppercase"><?php echo e($resource['learn_more_text']); ?></span>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php if(count($resourcesSectionThree['resource_slider']) > 3): ?>
                        <div class="text-center mt-6">
                            <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                                Load More
                            </button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-promotions.blade.php ENDPATH**/ ?>