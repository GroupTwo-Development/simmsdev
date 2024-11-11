<?php if($associated_homes['homes']): ?>
    <section id="availablehomes" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="pb-6 lg:pb-16 xl:pb-28  w-full">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl  text-center mb-10 lg:mb-16">Quick Move-In Homes</h2>
                
                <div class="md:flex md:flex-row md:justify-center md:items-start content-center md:flex-wrap  md:gap-2 xl:gap-5 w-full">
                    <?php $__currentLoopData = $associated_homes['homes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                        <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full md:w-[49%] lg:w-[32%] <?php echo e($index >= 3 ? ' hidden' : ''); ?>">
                            <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
                                <?php if($home['card_image']): ?>
                                    <img src="<?php echo e($home['card_image']['sizes']['large']); ?>" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="<?php echo e($home['card_image']['alt']); ?>" />
                                <?php endif; ?>
                                <?php if($home['marketing_switch'] == 'yes'): ?>
                                    <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                                        <span class="block text-sm font-semibold tracking-[0.15em] uppercase"><?php echo e($home['marketing_text']); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="border-b-[1px] border-simms-gold">
                                    <div class="px-6 py-3">
                                        <h3 class="text-balance text-xl text-[#534E50] lg:text-xl font-arno_pro_subhead" aria-describedby="<?php echo e($home['title_home']); ?>"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="<?php echo e($home['permalink']); ?>"><?php echo $home['title_home']; ?></a></h3>
                                        <span class="text-sm font-[300]"><?php echo e($home['city'] . ', ' . $home['state']); ?></span>
                                        
                                    </div>
                                </div>
                                <?php if($home['beds'] || $home['baths'] || $home['sqft'] || $home['baths']): ?>
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                                            <?php if($home['beds']): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bbeds-icon.png'); ?> " /> 
                                                    <div>
                                                        <span class="text-sm font-normal"><?php echo e(($home['beds'])); ?></span>
                                                        <span class="text-sm font-normal uppercase ">Beds</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($home['baths'] || $home['half_baths']): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row  gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bathroom-icon.png'); ?> " /> 
                                                    <div>
                                                        <span class="text-sm font-normal"><?php echo ($home['half_baths']) ? ($home['baths'] . '.5') : $home['baths']; ?></span>
                                                        <span class="text-sm font-normal uppercase">Baths</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                        
                                            <?php if($home['sqft'] ): ?>
                                                <div class="flex flex-row sm:flex-col md:flex-row lg:flex-row xl:flex-row gap-1 items-center content-center">
                                                    <img class="bg-cover object-cover " src="<?= \Roots\asset('images/size-icon.png'); ?>" /> 
                                                    <div>
                                                        <span class="text-sm font-normal"><?php echo ($home['sqft'] ) ? ($home['sqft'] ) : ''; ?></span>
                                                        <span class="text-sm font-normal uppercase">SQ FT</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($home['assigned_plan']): ?>
                                    <div class="border-b-[1px] border-simms-gold">
                                        <div class="px-3 pb-3 flex flex-col items-start text-left">
                                        
                                            <span class="block font-normal">Floorplan:</span>
                                            <span class="text-sm font-semibold capitalize block">
                                                <a href="<?php echo e($home['assigned_plan_permalink']); ?>" class="hover:text-simms-gold"><?php echo e($home['assigned_plan']->post_title); ?></a>
                                            </span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                        
                        
                                <?php if($associated_homes['homes']): ?>
                                    <div>
                                        <div class="px-3 pb-3">
                                            <div>
                                                <span class="font-semibold text-primary-green text-lg block">Priced at <?php echo App\format_currency($home['price']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                            
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <?php if(count($associated_homes['homes']) > 3): ?>
                    <div class="text-center mt-6">
                        <button id="load-more" class="bg-simms-gold text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">
                            Load More
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/community/associated_homes.blade.php ENDPATH**/ ?>