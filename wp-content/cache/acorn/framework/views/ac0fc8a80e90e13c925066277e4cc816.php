<article <?php (post_class('h-entry')); ?>>
    <header class="mb-5">
      <div>
        <span class="font-normal capitalize text-[16px] tracking-tighter mb-2">Posted: <time datetime="<?php echo e(get_the_date()); ?>" class="text-primary-green"><?php echo e(get_the_date()); ?></time></span>
      </div>
      <h1 class="p-name mb-5 font-semibold text-3xl tracking-tight font-arno_pro_subhead">
        <?php echo $title; ?>

      </h1>
      <div>
        <?php echo e(the_post_thumbnail()); ?>

      </div>
    </header>
  
    <div class="e-content">
      <?php (the_content()); ?>
    </div>
  
    <?php if($pagination): ?>
      <footer>
        <nav class="page-nav" aria-label="Page">
          <?php echo $pagination; ?>

        </nav>
      </footer>
    <?php endif; ?>
  </article>
  <?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/partials/content-single-post.blade.php ENDPATH**/ ?>