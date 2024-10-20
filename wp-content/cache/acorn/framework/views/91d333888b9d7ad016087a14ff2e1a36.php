<footer class="content-info bg-secondary-green">
  
  <?php if($footerContent['logo_footer'] || $footerContent['content_footer']): ?>
    <div class="pt-10 pb-10">
      <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center">
          
          <div class="flex flex-row justify-start items-center gap-2">
            <div class="mb-5">
                <?php
                // Get image ID
                $image_id = $footerContent['logo_footer'];
                
                // Get the alt text of the image
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                ?>
                <?php echo wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]); ?>

              </div>
            <div>
              <span class="font-arno_pro_subhead font-normal text-2xl text-white">Stay in Touch</span>
            </div>
          </div>
          <div class="text-center text-white mb-5">
              <?php echo $footerContent['content_footer']; ?>

          </div>
          <div class="">
            <button type="button" class="bg-simms-gold uppercase font-semibold tracking-[0.1em] text-center text-black inline-block px-3 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out">
              GET IN THE KNOW
            </button>
           </div>
        </div>

      </div>
    </div>
  <?php endif; ?>

  
  <div>
    <div class="container mx-auto">
        
        <div>
          
            <?php if($footerContent['multi_logo']): ?>
              <div class="">
                <div>
                  <?php
                  // Get image ID
                  $image_id = $footerContent['multi_logo'];
                  
                  // Get the alt text of the image
                  $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                  ?>
                  <?php echo wp_get_attachment_image($image_id, 'full', false, ['alt' => $image_alt]); ?>

                </div>
              </div>
            <?php endif; ?>
            
            <div>
              
              <?php if($footerContent['feature_communities']): ?>
                  <div>
                    <?php $__currentLoopData = $footerContent['feature_communities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <div>
                          <span><?php echo e($contact['community_available_home']); ?></span>
                          <div>
                            <span><?php echo e($contact['contact_name']); ?></span>
                        
                            <a href="tel:<?php echo e($contact['contact_phone']['number']); ?>"></a>
                          </div>
                          
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              <?php endif; ?>

            </div>
          <div>

        </div>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/sections/footer.blade.php ENDPATH**/ ?>