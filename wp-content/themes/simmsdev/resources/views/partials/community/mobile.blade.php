<div class="relative">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between w-full">
            {{-- mobile  --}}
            <div class="flex flex-row w-full justify-start gap-1">
                {{-- offcanvas Filter --}}
                <div>
                    <x-mobile-filter></x-mobile-filter>
                    {{-- <button role="button" type="button"
                        class="">
                        <span>Filter</span>
                    </button> --}}
                </div>

                {{-- Sort option --}}
                <div>
                    <x-dropdown-select class="border-2">
                        <span class="mr-1 text-sm font-normal">Sorted By: Price Low To High</span>
                        <x-slot name="itemslist">
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Mont Blanc
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Monte Rosa
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:bg-gray-200 whitespace-no-wrap py-2 px-4">
                                    Dom <span class="text-gray-400">(no good)</span>
                                </a>
                            </li>
                        </x-slot>
                    </x-dropdown-select>
                </div>
            </div>
            {{-- Toggle Button for Map and Card --}}
            <div>
                <button @click="showMap = !showMap" role="button"
                    class="relative h-[40px] flex items-center cursor-pointer px-[8px] py-[5px] border-[1px] border-gray-300 rounded-[3px] font-semibold text-sm">
                    <span x-text="showMap ? 'Card' : 'Map'"></span>
                    <i :class="showMap ? 'fa-solid fa-table-cells-large' : 'fa-solid fa-location-dot'" class="ml-2 text-primary-green text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</div>


