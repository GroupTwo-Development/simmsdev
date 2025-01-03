<!-- Offcanvas: Start Position -->
<!-- An Alpine.js and Tailwind CSS component by https://pinemix.com -->
<div
  x-data="{
    open: false,
    mobileFullWidth: false, 

    // 'start', 'end', 'top', 'bottom'
    position: 'start',
    
    // 'xs', 'sm', 'md', 'lg', 'xl'
    size: 'md',

    // Set transition classes based on position
    transitionClasses: {
      'x-transition:enter-start'() {
        if (this.position === 'start') {
          return '-translate-x-full rtl:translate-x-full';
        } else if (this.position === 'end') {
          return 'translate-x-full rtl:-translate-x-full';
        } else if (this.position === 'top') {
          return '-translate-y-full';
        } else if (this.position === 'bottom') {
          return 'translate-y-full';
        }
      },
      'x-transition:leave-end'() {
        if (this.position === 'start') {
          return '-translate-x-full rtl:translate-x-full';
        } else if (this.position === 'end') {
          return 'translate-x-full rtl:-translate-x-full';
        } else if (this.position === 'top') {
          return '-translate-y-full';
        } else if (this.position === 'bottom') {
          return 'translate-y-full';
        }
      },
    },
  }"
  x-on:keydown.esc.prevent="open = false"
>
  <!-- Placeholder -->
  <div>
    <!-- Offcanvas Toggle Button -->
    <button
        role="button"
        x-on:click="open = true"
        type="button"
        <?php echo e($attributes->merge(['class' => 'relative h-[55px]  flex items-center cursor-pointer px-[8px] py-[5px] font-[300] text-sm'])); ?>

        >
        <span>Filters</span>
    </button>
    <!-- END Offcanvas Toggle Button -->
  </div>
  <!-- END Placeholder -->

  <!-- Offcanvas Backdrop -->
  <div
    x-cloak
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-bind:aria-hidden="!open"
    tabindex="-1"
    role="dialog"
    aria-labelledby="pm-offcanvas-title"
    class="z-50 fixed inset-0 overflow-hidden bg-zinc-700/75 backdrop-blur-sm dark:bg-zinc-950/50"
  >
    <!-- Offcanvas Sidebar -->
    <div
      x-cloak
      x-show="open"
      x-on:click.away="open = false"
      x-bind="transitionClasses"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-end="translate-x-0 translate-y-0"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="translate-x-0 translate-y-0"
      role="document"
      class="absolute flex w-full flex-col bg-white shadow-lg will-change-transform"
      x-bind:class="{
        'h-dvh top-0 end-0': position === 'end',
        'h-dvh top-0 start-0': position === 'start',
        'bottom-0 start-0 end-0': position === 'top',
        'bottom-0 start-0 end-0': position === 'bottom',
        'h-64': position === 'top' || position === 'bottom',
        'sm:max-w-xs': size === 'xs' && !(position === 'top' || position === 'bottom'),
        'sm:max-w-sm': size === 'sm' && !(position === 'top' || position === 'bottom'),
        'sm:max-w-md': size === 'md' && !(position === 'top' || position === 'bottom'),
        'sm:max-w-lg': size === 'lg' && !(position === 'top' || position === 'bottom'),
        'sm:max-w-xl': size === 'xl' && !(position === 'top' || position === 'bottom'),
        'max-w-72': !mobileFullWidth && !(position === 'top' || position === 'bottom'),
      }"
    >
      <!-- Header -->
      <div
        class="flex min-h-16 flex-none items-center justify-between border-b border-zinc-100 px-5 dark:border-zinc-800 md:px-7"
      >
        <h3 id="pm-offcanvas-title" class="py-5 font-semibold">Filters</h3>

        <!-- Close Button -->
        <button
          x-on:click="open = false"
          type="button"
          class="inline-flex items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-3 py-2 text-xs font-semibold leading-5 text-zinc-800 hover:border-zinc-300 hover:text-zinc-900 hover:shadow-sm focus:ring-zinc-300/25 active:border-zinc-200 active:shadow-none dark:border-zinc-700 dark:bg-transparent dark:text-zinc-300 dark:hover:border-zinc-600 dark:hover:text-zinc-200 dark:focus:ring-zinc-600/50 dark:active:border-zinc-700"
        >
          <svg
            class="hi-solid hi-x -mx-1 inline-block size-4"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <!-- END Close Button -->
      </div>
      <!-- END Header -->

      <!-- Content -->
      <div class="flex grow flex-col overflow-y-auto p-5 md:p-7">
        <!-- Placeholder -->
      <?php echo e($content); ?>

      </div>
      <!-- END Content -->
    </div>
    <!-- END Offcanvas Sidebar -->
  </div>
  <!-- END Offcanvas Backdrop -->
</div>
<!-- END Offcanvas: Start Position -->
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/mobile-filter.blade.php ENDPATH**/ ?>