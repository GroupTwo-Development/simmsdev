<?php if($associated_floorplans): ?>
    <section id="floorplans" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="pb-6 lg:pb-16 xl:pb-20  w-full">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl  text-center mb-10 lg:mb-16">Available FloorPlans</h2>
                
                <div class="md:flex md:flex-row md:justify-center md:items-start content-center md:flex-wrap  md:gap-2 xl:gap-5 w-full">
                    <?php $__currentLoopData = $associated_floorplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                        <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full md:w-[49%] lg:w-[32%] <?php echo e($index >= 3 ? ' hidden' : ''); ?>">
                            <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
                                <?php if($gallery['card_image']): ?>
                                    <img src="<?php echo e($gallery['card_image']['sizes']['large']); ?>" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="<?php echo e($gallery['card_image']['alt']); ?>" />
                                <?php endif; ?>
                                <?php if($plan['plan_add_marketing_headline'] == 'yes'): ?>
                                    <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                                        <span class="block text-sm font-semibold tracking-[0.15em] uppercase"><?php echo e($plan['plan_marketing_headline']); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="border-b-[1px] border-simms-gold">
                                    <div class="px-6 py-3.5">
                                        <h3 class="text-balance text-2xl text-[#534E50] lg:text-2xl font-arno_pro_subhead" aria-describedby="<?php echo e($plan['name']); ?>"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="<?php echo e($plan['permalink']); ?>"><?php echo $plan['name']; ?></a></h3>
                                        
                                    </div>
                                </div>
                                <?php if($plan['beds'] || $plan['baths'] || $plan['plan_base_sqft'] || $plan['baths']): ?>
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                                            <?php if($plan['beds']): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bbeds-icon.png'); ?> " /> 
                                                    <div>
                                                        <span class="text-sm font-semibold"><?php echo e(($plan['beds'])); ?></span>
                                                        <span class="text-sm font-semibold uppercase ">Beds</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($plan['baths'] && $plan['half_baths']): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bathroom-icon.png'); ?> " /> 
                                                    <div>
                                                        <span class="text-sm font-semibold"><?php echo ($plan['half_baths']) ? ($plan['baths'] . '.5') : $plan['baths']; ?></span>
                                                        <span class="text-sm font-semibold uppercase">Baths</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                        
                                            <?php if($plan['plan_base_sqft'] ): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover " src="<?= \Roots\asset('images/size-icon.png'); ?>" /> 
                                                    <div>
                                                        <span class="text-sm font-semibold"><?php echo ($plan['plan_base_sqft'] ) ? ($plan['plan_base_sqft'] ) : ''; ?></span>
                                                        <span class="text-sm font-semibold uppercase">SQ FT</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>
                        
                        
                                <?php if($plan['plan_base_price']): ?>
                                    <div>
                                        <div class="px-3 pb-3">
                                            <div>
                                                <span class="font-semibold text-primary-green text-lg block">Priced at <?php echo App\format_currency($plan['plan_base_price']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                            
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <?php if(count($associated_floorplans) > 3): ?>
                    <div class="text-center mt-6">
                        <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                            Load More
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/associated-floorplans.blade.php ENDPATH**/ ?>