
  <div x-data="{ open: false }" class="relative" >
    <button
      x-on:click="open = true"

      type="button"
      {{ $attributes->merge(['class' => 'flex  items-center bg-white font-semibold rounded-[5px] focus:outline-none focus:shadow-inner py-2 px-2']) }}"
    >
    {{ $slot }}
       {{-- <span class="mr-1">Dropdown</span> --}}
       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  style="margin-top:3px">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
       </svg>
    </button>
    <ul
      x-show="open"
      x-on:click.away="open = false"
      {{ $attributes->merge(['class' => 'bg-white text-gray-700 rounded shadow-lg z-[1] absolute py-2 mt-1 min-w-[14rem]']) }}
     >
     {{ $itemslist }}
      {{-- <li>
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
      </li> --}}
    </ul>
  </div>
