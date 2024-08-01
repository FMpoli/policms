<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <span>{{ strtoupper(app()->getLocale()) }}</span>
        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div x-show="open" @click.away="open = false" class="absolute right-0 w-48 mt-2 transition duration-150 ease-out origin-top-right transform bg-white border border-gray-200 divide-y divide-gray-100 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
        <div class="py-1" role="none">
            <a href="{{ url('locale/en') }}" class="block px-4 py-2 text-sm text-gray-700 transition-colors duration-150 hover:bg-gray-100" data-lang="en" title="English">
                English
            </a>
            <a href="{{ url('locale/it') }}" class="block px-4 py-2 text-sm text-gray-700 transition-colors duration-150 hover:bg-gray-100" data-lang="it" title="Italiano">
                Italiano
            </a>
        </div>
    </div>
</div>
