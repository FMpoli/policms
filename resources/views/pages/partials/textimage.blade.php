<section style="background-color: {{ $block['data']['background_color'] }}">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        @if($block['data']['image_position'] == 'left' && isset($block['data']['media']))
            <div class="flex-shrink-0 mb-4 lg:col-span-5 lg:flex lg:justify-start md:mb-0">
                <x-curator-glider :media="$block['data']['media']" class="object-cover w-full h-auto max-h-96 rounded-3xl lg:w-auto"/>
            </div>
            <div class="flex flex-col lg:col-span-7 lg:ml-auto lg:items-start">
                <div class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    {!! $block['data']['content'] !!}
                </div>
            </div>
        @elseif($block['data']['image_position'] == 'right' && isset($block['data']['media']))
            <div class="flex flex-col lg:col-span-7 lg:items-start">
                <div class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    {!! $block['data']['content'] !!}
                </div>
            </div>
            <div class="flex-shrink-0 mt-4 lg:col-span-5 lg:flex lg:justify-end md:mt-0">
                <x-curator-curation :media="$block['data']['media']" curation="heroImage" class="object-cover w-full h-auto max-h-96 rounded-3xl lg:w-auto"/>
            </div>
        @else
            <div class="flex flex-col lg:col-span-full lg:items-start">
                <div class="mb-6 text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    {!! $block['data']['content'] !!}
                </div>
            </div>

        @endif
    </div>

</section>

