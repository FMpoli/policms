<!-- Navigation -->

<nav x-cloak class="fixed z-10 w-full transition duration-300" x-data="{ open: false, isHovered: false, langOpen: false, isHome: (window.location.pathname === '/' || window.location.pathname === '') }"
    @mouseenter="isHovered = true" @mouseleave="isHovered = false"
    :class="{'bg-white bg-opacity-100 text-black shadow-md': isHovered || isScrolled || open || !isHome, 'bg-transparent text-white': !isHovered && !isScrolled && !open && isHome}">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex items-center justify-between">
            <div class="text-lg font-semibold">
                <a href="{{ url('/') }}"><img :src="isHovered || isScrolled || open || !isHome ? logoColor : logoWhite" alt="Logo" class="h-10"></a>
            </div>
            <div class="items-center hidden uppercase md:flex">
                @foreach($mainMenuItems['items'] as $item)
                    <a href="{{ $item['url'] }}"
                    {{ isset($item['target']) ? 'target=' . $item['target'] : '' }}
                    class="mx-4 transition duration-300"
                    :class="{'text-black hover:underline': isHovered || isScrolled || !isHome, 'text-white': !isHovered && !isScrolled && isHome}">
                        {{ $item['name'] }}
                    </a>
                @endforeach
                @include('includes.lang-switcher')
            </div>
            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="focus:outline-none" :class="{'text-black': isScrolled || open || !isHome, 'text-white': !isScrolled && !open && isHome}">
                    <svg class="w-6 h-6" fill="none" :stroke="isScrolled || open || !isHome ? 'black' : 'white'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': !open}" class="md:hidden">
            @foreach($mainMenuItems['items'] as $item)
                <a @click="open = !open" href="{{ $item['url'] }}"
                {{ isset($item['target']) ? 'target=' . $item['target'] : '' }}
                class="block mt-4 uppercase transition duration-300" :class="{'text-black hover:underline': open || isScrolled || !isHome, 'text-white': !open && !isScrolled && isHome}">
                    {{ $item['name'] }}
                </a>
            @endforeach
            <div class="relative">
                <button @click="langOpen = !langOpen" class="block w-full py-2 mt-4 text-left focus:outline-none" :class="{'bg-blue-500 text-white': langOpen, 'bg-transparent': !langOpen}">Language</button>
                <div x-show="langOpen" @click.away="langOpen = false" x-transition x-cloak class="mt-2 bg-white rounded shadow-lg">
                    <template x-for="lang in languages" :key="lang">
                        <a href="#" @click.prevent="changeLanguage(lang)" :class="{'bg-blue-500 text-white': currentLang === lang, 'text-black': currentLang !== lang}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">
                            <span x-text="lang"></span>
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>
</nav>
