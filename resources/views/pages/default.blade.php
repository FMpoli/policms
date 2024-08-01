@extends('layouts.page')

@section('title')
    {{ $page->title }}
@endsection
@section('content')
    @foreach ($page->content as $block)
        @if ($block['type'] == 'faq')
            @include('polipages::blocks.faq', ['block' => $block])
        @elseif ($block['type'] == 'call-to-action')
            @include('polipages::blocks.cta', ['block' => $block])
        @elseif ($block['type'] == 'features')
            @include('polipages::blocks.features', ['block' => $block])
        @elseif ($block['type'] == 'hero-with-bck-image')
            @include('polipages::blocks.herobckimage', ['block' => $block])
        @elseif ($block['type'] == 'anchor')
            @include('polipages::blocks.anchor', ['block' => $block])
        @elseif ($block['type'] == 'hero-with-bck-video')
            @include('polipages::blocks.herobckvideo', ['block' => $block])
        @elseif ($block['type'] == 'hero-with-image')
            @include('polipages::blocks.heroimage', ['block' => $block])
        @elseif ($block['type'] == 'hero-with-video')
            @include('polipages::blocks.herovideo', ['block' => $block])
        @elseif ($block['type'] == 'text-with-image')
            @include('polipages::blocks.textimage', ['block' => $block])
        @endif
    @endforeach
@endsection
