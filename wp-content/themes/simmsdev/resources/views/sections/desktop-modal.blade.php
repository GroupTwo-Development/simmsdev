<div x-data="{ isOpen: false }" class="relative">
    <!-- Button to trigger the modal -->
    <button type="button" @click="isOpen = !isOpen" class="bg-simms-gold uppercase font-semibold tracking-[0.1em] text-center text-black inline-block px-3 py-3 whitespace-nowrap hover:bg-white transition-all ease-in-out">
        Get Started
    </button>

    <!-- Modal wrapper -->
    <div x-show="isOpen" class="fixed inset-0 z-10 overflow-y-auto">
        <!-- Background overlay -->
        <div 
            @click="isOpen = false" 
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            aria-hidden="true">
        </div>

        <!-- Modal content -->
        <div 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative z-10 flex min-h-screen items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <!-- Modal panel -->
            <x-cta-modal />
            
        </div>
    </div>
</div>
