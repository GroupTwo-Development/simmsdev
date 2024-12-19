
<div class="inline-block relative min-w-[240px] justify-center">
  <div
      x-data="{
          open: false,
          toggle() {
              if (this.open) {
                  return this.close()
              }

              this.$refs.button.focus()

              this.open = true
          },
          close(focusAfter) {
              if (! this.open) return

              this.open = false

              focusAfter && focusAfter.focus()
          }
      }"
      x-on:keydown.escape.prevent.stop="close($refs.button)"
      x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
      x-id="['dropdown-button']"
      class="relative"
  >
      <!-- Button -->
      <button
          x-ref="button"
          x-on:click="toggle()"
          :aria-expanded="open"
          :aria-controls="$id('dropdown-button')"
          type="button"
          class="flex justify-between items-center gap-2 bg-white px-2 py-2.5 w-full h-[50px] font-[300]"
      >
          <?php echo e($title); ?>


          <!-- Heroicon: chevron-down -->
          <svg id="Component_51_1" data-name="Component 51 – 1" xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 19 16">
            <path id="Polygon_10" data-name="Polygon 10" d="M9.5,0,19,16H0Z" transform="translate(19 16) rotate(180)" fill="#cec778"/>
          </svg>
          
      </button>

      <!-- Panel -->
      <div
          x-ref="panel"
          x-show="open"
          x-transition.origin.top.left
          x-on:click.outside="close($refs.button)"
          :id="$id('dropdown-button')"
          style="display: none;"
          class="absolute left-0 z-20 min-w-[240px] border-[1px] border-[#ddd] bg-white px-2 py-5 flex flex-col justify-center items-center"
      >
          <?php echo e($dropdown); ?>

      </div>
  </div>
</div><?php /**PATH /Users/grouptwodev/Herd/simmsdev-app/wp-content/themes/simmsdev/resources/views/components/dropdown-select.blade.php ENDPATH**/ ?>