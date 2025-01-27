<!doctype html>
<html <?php (language_attributes()); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
      $builders_hub_google_tag_header = get_option('builders_hub_google_tag_header');
      $builders_hub_google_tag_body = get_option('builders_hub_google_tag_body');
      ?>
    <?php if($builders_hub_google_tag_header) : ?>
      <?= $builders_hub_google_tag_header ?>
    <?php endif; ?>
    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>

    
  </head>

  <body <?php (body_class()); ?>>
    <?php (wp_body_open()); ?>
    <?php if($builders_hub_google_tag_body) : ?>
      <?= $builders_hub_google_tag_body ?>
    <?php endif; ?>

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        <?php echo e(__('Skip to content')); ?>

      </a>

      <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <main id="main" class="main min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
      </main>

      

      <?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/layouts/app.blade.php ENDPATH**/ ?>