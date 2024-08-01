@php
    $videoUrl = is_array($block['data']['video']) ? reset($block['data']['video']) : $block['data']['video'];
@endphp
<section class="relative flex items-center justify-center h-screen overflow-hidden">
    <video autoplay loop muted playsinline class="hero-bg-video" controls>
        <source src="{{ Storage::url($videoUrl) }}" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
    <div class="relative max-w-2xl px-4 mx-auto text-center">
        <h1 class="text-5xl font-bold text-white">{{ $block['data']['title'] }}</h1>
        <p class="mt-4 mb-4 text-lg text-white">{{ $block['data']['subtitle'] }}</p>
        @foreach($block['data']['buttons'] as $button)
            <a href="{{ $button['url'] }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg {{ $loop->first ? 'bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900' : 'text-gray-300 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800' }}">
                {{ $button['text'] }}
                @if($button['icon'])
                    <x-icon name="{{ $button['icon'] }}" class="flex-shrink-0 w-6 h-6 ml-2"/>
                @endif
            </a>
        @endforeach
    </div>
</section>
