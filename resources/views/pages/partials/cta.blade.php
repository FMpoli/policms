<section style="background-color: {{ $block['data']['background_color'] }}">
    <div class="px-4 py-8 mx-auto max-w-7xl sm:py-16 lg:px-6">
        <h1 class="mb-4 text-4xl font-bold tracking-tight text-gray-900 lg:font-extrabold lg:text-6xl lg:leading-none dark:text-white lg:text-center xl:px-36 lg:mb-7">{{ $block['data']['title'] }}</h1>
        <p class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-center lg:text-xl xl:px-60">{{ $block['data']['description'] }}</p>

        <div class="flex flex-wrap justify-center">
            @foreach($block['data']['buttons'] as $button)
                <a href="{{ $button['url'] }}" class="inline-flex items-center justify-center px-5 py-3 m-2 text-base font-medium text-center rounded-lg {{ $loop->first ? 'text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900' : 'text-gray-500 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800' }}">
                    {{ $button['text'] }}
                    @if($button['icon'])
                        <x-icon name="{{ $button['icon'] }}" class="flex-shrink-0 w-6 h-6 ml-2"/>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</section>
