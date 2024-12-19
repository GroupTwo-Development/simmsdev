<?php if($testimonialsIntroContent): ?>
    <section id="description">
        
        <div class="bg-primary-green relative pt-14 xl:pt-20 pb-16 lg:pb-24  overflow-hidden">
            <div class="container mx-auto">
                <div class="text-white text-center xl:max-w-screen-lg mx-auto">
                    <?php if($testimonialsIntroContent['title']): ?>
                        <span class="text-simms-gold text-sm uppercase font-semibold tracking-[0.06em] block mb-2"><?php echo $testimonialsIntroContent['sub_title']; ?></span>
                    <?php endif; ?>
                    <?php if($testimonialsIntroContent['title']): ?>
                        <h1 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl mb-5"><?php echo $testimonialsIntroContent['title']; ?></h1>
                    <?php endif; ?>
                    <?php if($testimonialsIntroContent['description']): ?>
                        <div>
                            <?php echo $testimonialsIntroContent['description']; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/testimonials/introContent.blade.php ENDPATH**/ ?>