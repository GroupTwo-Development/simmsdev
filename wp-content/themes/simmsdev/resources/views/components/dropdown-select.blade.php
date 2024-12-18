
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
          {{ $title }}

          <!-- Heroicon: chevron-down -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-simms-gold" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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
          {{ $dropdown }}
      </div>
  </div>
</div>