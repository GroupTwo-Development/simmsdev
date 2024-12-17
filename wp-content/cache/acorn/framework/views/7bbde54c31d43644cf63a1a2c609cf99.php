
<?php if($plans_items['virtual_tour']): ?>

    <section id="virtual-tour" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="lg:mx-w-screen-lg xl:max-w-screen-md mx-auto">
              <div class="py-16 lg:py-16 xl:py-28 flex flex-col justify-center items-center content-center w-full text-center">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Virtual Tour</h2>
                <div class="py-3 group lg:flex lg:flex-row lg:justify-center items-center w-full lg:space-x-6">
                  <div class="h-[340px] w-full md:h-[400px] lg:h-[450px]">
                    <iframe src="<?php echo e($plans_items['virtual_tour']); ?>" width="100%" height="100%"></iframe>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/plans/virtual-tour.blade.php ENDPATH**/ ?>