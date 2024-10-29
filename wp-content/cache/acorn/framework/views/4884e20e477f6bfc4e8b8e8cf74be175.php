
  <div x-data="{ open: false }" class="relative" >
    <button
      x-on:click="open = true"

      type="button"
      <?php echo e($attributes->merge(['class' => 'flex  items-center bg-white font-semibold rounded-[5px] focus:outline-none focus:shadow-inner py-2 px-2'])); ?>"
    >
    <?php echo e($slot); ?>

       
       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  style="margin-top:3px">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
       </svg>
    </button>
    <ul
      x-show="open"
      x-on:click.away="open = false"
      <?php echo e($attributes->merge(['class' => 'bg-white text-gray-700 rounded shadow-lg z-[1] absolute py-2 mt-1 min-w-[14rem]'])); ?>

     >
     <?php echo e($itemslist); ?>

      
    </ul>
  </div>
<?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/dropdown-select.blade.php ENDPATH**/ ?>