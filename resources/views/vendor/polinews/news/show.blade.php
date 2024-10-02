@extends('polinews::layouts.news')
@section('title'){{ $news->title }} @endsection
@php
    $media = $news->main_image;
    $rmedia = is_array($media) ? reset($media) : $media;
    $mediaValue = is_array($media) ? $rmedia['id']: $media;
@endphp

@section('news-content')
<div class="flex flex-col gap-8 md:flex-row">
    <main class="w-full md:w-{{ (!$news->is_featured && $relatedNews->isNotEmpty()) ? '3/4' : '4/4' }}">
        <article class="prose lg:prose-xl max-w-none">
            <h1 class="mb-4 text-4xl font-bold tracking-tight text-left text-gray-900 lg:font-extrabold lg:text-4xl lg:leading-none dark:text-white lg:text-left lg:mb-7">{{ $news->title }}</h1>
            <div class="flex flex-wrap gap-3 items-center text-[15px]">
                <div class="flex flex-wrap gap-3">
                    <a style="border-color: {{ $news->category->color }};" class="pl-2 text-xs font-medium tracking-wide prose no-underline uppercase border-l-4 border-gray-500 no-prose hover:underline whitespace-nowrap" href="{{ route('category.index', ['slug' => $news->category->slug]) }}">{{ $news->category->title }}</a>
                </div>

                <div class="flex items-center w-full text-sm data-color">
                    <span class="whitespace-nowrap">{{ $news->published_at }}</span><span class="px-2.5">⋅</span>
                    <span class="whitespace-nowrap">
                        {{ __('polinews::polinews.reading_time') }}
                        {{ $readingTime }}
                        {{ trans_choice('polinews::polinews.minute', $readingTime) }}
                    </span>
                    <span class="ml-auto whitespace-nowrap">{{ __('polinews::polinews.created_by') }} <a href="">{{ $news->author->name }}</a></span><span class="px-2.5"></span>
                </div>
            </div>
            <div class="my-6 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-xl">{!! $news->summary !!}</div>
            @if(filled($news->main_image))
            <div class="w-full mb-6 aspect-video"><x-curator-glider :media="$mediaValue" class="w-full mb-0"/> </div>
            @endif
            <div class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-xl rich-content">
                {!! $news->content !!}
            </div>
        </article>
    </main>

    @if(!$news->is_featured && $relatedNews->isNotEmpty())
        <aside class="w-full md:w-2/4">
            <div class="p-4 bg-white border border-gray-200 rounded-lg">
                <h2 style="border-color: {{ $news->category->color }};" class="pl-2 mb-4 text-lg font-semibold border-l-4 border-yellow-500">{{ __('polinews::polinews.latest_from_category') }} {{ $news->category->title }}</h2>
                <ul class="space-y-4">
                    @foreach($relatedNews as $relatedItem)
                        <li class="flex items-start space-x-3">
                            @if(filled($relatedItem->main_image))
                            @php
                                $media = $relatedItem->main_image;
                                $rmedia = is_array($media) ? reset($media) : $media;
                                $mediaValue = is_array($media) ? $rmedia['id']: $media;
                            @endphp
                            <div class="flex-shrink-0 overflow-hidden rounded w-36">
                                <div><x-curator-glider :media="$mediaValue"/> </div>
                            </div>
                            @endif

                            <div class="flex-grow">
                                <a href="{{ route('news.show', $relatedItem->slug) }}" class="block hover:text-blue-600">
                                    <h3 class="font-medium">{{ $relatedItem->title }}</h3>
                                </a>
                                <p class="text-xs text-gray-500">{{ $relatedItem->published_at->format('M d, Y') }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    @endif
</div>

@if($news->is_featured && $relatedNews->isEmpty())
    <div class="mt-8">
        <h2 class="mb-4 text-2xl font-bold">{{ __('polinews::polinews.latest_from_category') }} {{ $news->category->title }}</h2>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($relatedNews->take(4) as $relatedItem)
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    @if(filled($relatedItem->main_image))
                    @php
                        $media = $relatedItem->main_image;
                        $rmedia = is_array($media) ? reset($media) : $media;
                        $mediaValue = is_array($media) ? $rmedia['id']: $media;
                    @endphp
                    <div class="aspect-w-16 aspect-h-9">
                        <x-curator-curation curation="polinewsthumbnail" loading="lazy" :media=$mediaValue class="mt-0"/>
                    </div>
                    @endif
                    <div class="p-4">
                        <a href="{{ route('news.show', $relatedItem->slug) }}" class="block hover:text-blue-600">
                            <h3 class="mb-2 text-xl font-semibold">{{ $relatedItem->title }}</h3>
                        </a>
                        <p class="text-sm text-gray-500">{{ $relatedItem->published_at->format('M d, Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@endsection
