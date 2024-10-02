@extends('polinews::layouts.category')
@section('title')News @endsection

@section('category-content')
<h1 class="mb-4 text-4xl font-bold tracking-tight text-left text-gray-900 lg:font-extrabold lg:text-4xl lg:leading-none dark:text-white lg:text-center lg:mb-7">{{ __('polinews::polinews.news_title') }}</h1>

<h2 class="mb-4 text-2xl font-semibold text-gray-800 dark:text-gray-200 lg:text-3xl lg:text-center">
    <div class="flex justify-center space-x-4">
        <a href="{{ route('news.index') }}"
           class="px-4 py-2 rounded-lg text-sm font-medium
                  {{ is_null($slug) ? 'bg-gray-700 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
            All
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('category.index', ['slug' => $category->slug]) }}"
               class="px-4 py-2 rounded-lg text-sm font-medium
                      {{ $category->slug == $slug ? 'bg-gray-700 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
                {{ $category->title }}
            </a>
        @endforeach
    </div>
</h2>

@if($news->isNotEmpty())
    <div class="grid grid-cols-1 gap-6 prose max-w-none md:grid-cols-2 lg:grid-cols-3">
        @foreach ($news as $item)
            @php
                $media = $item->main_image;
                $rmedia = is_array($media) ? reset($media) : $media;
                $mediaValue = is_array($media) ? $rmedia['id']: $media;
            @endphp
            <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md">
                <x-curator-curation curation="polinewsthumbnail" loading="lazy" :media=$mediaValue class="mt-0"/>
                <div class="flex flex-col flex-1 p-4">
                    <a class="pl-2 text-xs font-medium tracking-wide text-black no-underline uppercase border-l-4 hover:underline whitespace-nowrap" style="border-color: {{ $item->category->color }};" href="{{ route('category.index', ['slug' => $item->category->slug]) }}">{{ $item->category->title }}</a>
                    <h3 class="mb-2 text-xl font-bold prose text-gray-900 not-prose dark:text-gray-100">{{ $item->title }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $item->published_at->format('M d, Y') }}</p>
                    <p class="mb-4 text-gray-700 dark:text-gray-300">{{ $item->summary }}</p>
                    <div class="mt-auto text-right">
                        <a href="{{ route('news.show', ['slug' => $item->slug]) }}" class="text-blue-500 hover:underline">{{ __('polinews::polinews.read_more') }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $news->links("polinews::pagination.tailwind") }} <!-- Questo genera i link di paginazione -->
    </div>
@else
    <p class="text-gray-600 dark:text-gray-300 lg:text-center">{{ __('polinews::polinews.no_news') }}</p>
@endif
@endsection
