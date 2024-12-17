
<?php if($plans_items['sitemap']): ?>

    <section id="sitemap" class="relative object-cover mt-1 w-full" style="background-image: url('<?= \Roots\asset('assets/pattern2.png'); ?>')">
        <div class="container mx-auto">
            <div class="lg:mx-w-screen-lg">
              <div class="py-16 lg:py-16 xl:py-28 flex flex-col justify-center items-center content-center w-full text-center">
                <h2 class="font-arno_pro_subhead font-normal text-3xl md:text-4xl lg:text-5xl mb-3 lg:mb-5">Floor Plan</h2>
                
                 <div class="md:max-w-screen-md lg:max-w-screen-md mx-auto">
                    <div class="py-3 group lg:flex lg:flex-row lg:justify-between w-full lg:space-x-6">
                        <?php $__currentLoopData = $plans_items['sitemap']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sitemap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <?php if($loop->first): ?>
                              <a
                                data-fancybox="gallery-qmi-sitemap"
                                data-src="<?php echo e($sitemap['sizes']['large']); ?>"
                                data-caption="<?php echo e(($sitemap['caption']) ? $sitemap['caption'] : ''); ?>"
                                class="relative block border-2 border-simms-gold shadow-md group-hover:-translate-y-1 duration-300 group-hover:cursor-pointer mb-10"
                              >
                                <img src="<?php echo e($sitemap['sizes']['large']); ?>" alt="<?php echo e($sitemap['alt']); ?>" class="h-[350px] md:h-[430px] lg:h-[530px] xl:h-[560px] w-full" />
                              </a>
                          <?php endif; ?>

                          <div style="display:none">
                            <a data-fancybox="gallery-qmi-sitemap" data-src="<?php echo e($sitemap['sizes']['large']); ?>" data-thumb="<?php echo e($sitemap['sizes']['medium']); ?>"></a>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>

                      <?php if($plans_items['interactive_plan']): ?>
                        <?php if (isset($component)) { $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59 = $attributes; } ?>
<?php $component = App\View\Components\CtaLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($plans_items['interactive_plan']).'','class' => 'text-secondary-green border-b-secondary-green mt-3 md:mt-5 hover:text-simms-gold transition-all ease-in-out']); ?><?php echo e(__('View Interactive Plans')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $attributes = $__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__attributesOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59)): ?>
<?php $component = $__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59; ?>
<?php unset($__componentOriginalf45da169b4dc4f6c9e263e97c3b1ce59); ?>
<?php endif; ?>
                      <?php endif; ?>
                  </div>
              </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/plans/sitemap.blade.php ENDPATH**/ ?>