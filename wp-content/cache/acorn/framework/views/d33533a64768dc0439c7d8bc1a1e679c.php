<div class="w-full">
    <article class="group flex flex-col overflow-hidden bg-white shadow-md mb-8 w-full">
        <div class="h-56 md:h-56 xl:h-64 overflow-hidden relative"> 
            <?php if(!empty($gallery['card_image'])): ?>
                <a href="<?php echo e($communities_items['link']); ?>">
                    <img src="<?php echo e($gallery['card_image']['sizes']['large']); ?>" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="<?php echo e($gallery['card_image']['alt']); ?>" />
                </a>
            <?php endif; ?>
            <?php if($communities_items['plan_add_marketing_toggle'] == 'yes'): ?>
                <div class="bg-simms-gold absolute bottom-0 z-[1] w-full px-6 py-1.5">
                    <span class="block font-semibold tracking-[0.15em] uppercase"><?php echo e($communities_items['plan_marketing_headline']); ?></span>
                </div>
            <?php endif; ?>
        </div>
        <div class="flex flex-col gap-4">
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-6 py-3">
                    <h3 class="text-balance text-2xl text-[#534E50] lg:text-2xl font-arno_pro_subhead" aria-describedby="<?php echo e($title); ?>"><a class="hover:text-simms-gold transition duration-0 ease-in-out" href="<?php echo e($communities_items['link']); ?>"><?php echo e($title); ?></a></h3>
                    <span class="text-sm font-[300]"><?php echo e($communities_items['city'] . ', ' . $communities_items['state']); ?></span>
                </div>
            </div>

            
            <?php if(isset($floorplan_item['min_beds']) || isset($floorplan_item['min_bath'] )|| $communities_items['min_sqft'] || $floorplan_item['baths']): ?>
                <div class="border-b-[1px] border-simms-gold">
                    <div class="px-3 pb-3 flex flex-row justify-between items-center content-center gap-1">
                        <?php if(isset($floorplan_item['min_beds'])): ?>
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bbeds-icon.png'); ?> " /> 
                                <div>
                                    <span class="text-sm font-semibold"><?php echo e(($floorplan_item['min_beds'])); ?></span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Beds</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($floorplan_item['min_bath']) && $floorplan_item['max_bath']): ?>
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row  gap-2 items-center content-center">
                                <img class="bg-cover object-cover" src="<?= \Roots\asset('images/bathroom-icon.png'); ?> " /> 
                                <div>
                                    <span class="text-sm font-semibold"><?php echo ($floorplan_item['max_bath'] > $floorplan_item['min_bath'] ) ? ($floorplan_item['min_bath'] . '<i class="text-[12px]">+</i>') : $floorplan_item['min_bath']; ?></span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Baths</span>
                                </div>
                            </div>
                        <?php endif; ?>
    
                        <?php if($communities_items['min_sqft'] &&  $communities_items['max_sqft'] ): ?>
                            <div class="flex flex-row sm:flex-col md:flex-row lg:flex-col xl:flex-row gap-2 items-center content-center">
                                <img class="bg-cover object-cover " src="<?= \Roots\asset('images/size-icon.png'); ?> " /> 
                                <div>
                                    <span class="text-sm font-semibold"><?php echo ($communities_items['max_sqft'] > $communities_items['min_sqft'] ) ? ($communities_items['min_sqft'] . '<i class="text-[12px]">+</i>') : $communities_items['min_sqft']; ?></span>
                                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">SQ FT</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            <?php endif; ?>
    

      
            <?php if($associated_homes['totalhomes']): ?>
            <div class="border-b-[1px] border-simms-gold">
                <div class="px-3 pb-3 flex flex-row items-center gap-1.5">
                    <div class="bg-primary-green text-white h-[28px] w-[28px] flex flex-col justify-center items-center">
                        <span class="block font-semibold p-1"><?php echo $associated_homes['totalhomes']; ?></span>
                    </div>
                    <span class="text-sm font-semibold uppercase tracking-[0.06em]">Move-In Ready Homes</span>
                </div>
            </div>
            <?php endif; ?>
    
            <?php if($communities_items['min_price']): ?>
                <div>
                    <div class="px-3 pb-3">
                        <div>
                            <span class="font-semibold text-primary-green text-lg block">Starting at <?php echo App\format_currency($communities_items['min_price']); ?></span>
                        </div>
                    </div>
                </div>
           
            <?php endif; ?>
        </div>
    </article>

</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-communities.blade.php ENDPATH**/ ?>