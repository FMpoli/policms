<section style="background-color: {{ $block['data']['background_color'] }}">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        @if($block['data']['image_position'] == 'left' && isset($block['data']['media']))
            <div class="flex-shrink-0 mb-4 lg:col-span-5 lg:flex lg:justify-start md:mb-0">
                <x-curator-glider :media="$block['data']['media']" class="object-cover w-full h-auto max-h-96 rounded-3xl lg:w-auto"/>
            </div>
            <div class="flex flex-col lg:col-span-7 lg:ml-auto lg:items-start">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ $block['data']['title'] }}</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ $block['data']['subtitle'] }}</p>
                <div class="flex flex-wrap lg:justify-start">
                    @foreach($block['data']['buttons'] as $button)
                        <a href="{{ $button['url'] }}" class="inline-flex items-center justify-center px-5 py-3 m-1 text-base font-medium text-center rounded-lg {{ $loop->first ? 'text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900' : 'text-gray-500 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800' }}">
                            {{ $button['text'] }}
                            @if($button['icon'])
                                <x-icon name="{{ $button['icon'] }}" class="flex-shrink-0 w-6 h-6 ml-2"/>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        @elseif($block['data']['image_position'] == 'right' && isset($block['data']['media']))
            <div class="flex flex-col lg:col-span-7 lg:items-start">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ $block['data']['title'] }}</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ $block['data']['subtitle'] }}</p>
                <div class="flex flex-wrap lg:justify-start">
                    @foreach($block['data']['buttons'] as $button)
                        <a href="{{ $button['url'] }}" class="inline-flex items-center justify-center px-5 py-3 m-1 text-base font-medium text-center rounded-lg {{ $loop->first ? 'text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900' : 'text-gray-500 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800' }}">
                            {{ $button['text'] }}
                            @if($button['icon'])
                                <x-icon name="{{ $button['icon'] }}" class="flex-shrink-0 w-6 h-6 ml-2"/>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="flex-shrink-0 mt-4 lg:col-span-5 lg:flex lg:justify-end md:mt-0">
                <x-curator-curation :media="$block['data']['media']" curation="heroImage" class="object-cover w-full h-auto max-h-96 rounded-3xl lg:w-auto"/>
            </div>
        @else
            <div class="flex flex-col lg:col-span-12 lg:items-start">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">{{ $block['data']['title'] }}</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ $block['data']['subtitle'] }}</p>
                <div class="flex flex-wrap lg:justify-start">
                    @foreach($block['data']['buttons'] as $button)
                        <a href="{{ $button['url'] }}" class="inline-flex items-center justify-center px-5 py-3 m-1 text-base font-medium text-center rounded-lg {{ $loop->first ? 'text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900' : 'text-gray-500 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800' }}">
                            {{ $button['text'] }}
                            @if($button['icon'])
                                <x-icon name="{{ $button['icon'] }}" class="flex-shrink-0 w-6 h-6 ml-2"/>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
