@php
    $locale = app()->getLocale();
    $mainMenuHandle = "main-menu";
    $footerMenuHandle = "footer-menu";

    $mainMenuItems = \Detit\Polimenu\Models\Menu::where('handle',$mainMenuHandle)->firstOrFail();
    $footerMenuItems = \Detit\Polimenu\Models\Menu::where('handle',$footerMenuHandle)->firstOrFail();
@endphp
<!doctype html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-white" x-data="{ isScrolled: false, isHome: (window.location.pathname === '/' || window.location.pathname === ''), logoColor: '{{ asset('images/logo_web_color.svg') }}', logoWhite: '{{ asset('images/logo_web_white.svg') }}' }" @scroll.window="isScrolled = (window.pageYOffset > 10)">
    <div x-data="{
        scrollTo(id) {
            console.log('Scrolling to:', id); // Aggiungi questo log
            const targetElement = document.getElementById(id);
            if (targetElement) {
                console.log('Element found:', targetElement); // Aggiungi questo log
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                console.log('Element not found'); // Aggiungi questo log
            }
        }
    }">
        <header>
            @include('includes.menu')
        </header>
        <div :class="{ 'pt-16': !isHome }">
            <div class="max-w-4xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
                <div class="mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>


