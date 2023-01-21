@extends('layouts.app')
@if (App::getLocale() == 'en')
    @section('title', $page->title_en)
@elseif (App::getLocale() == 'ru')
    @section('title', $page->title_ru)
@else
    @section('title', $page->title_tr)
@endif
@section('content')
<div class="tt-breadcrumb" style="background-image: url('/images/breadcrumb_bg.jpg')">
    <div class="container container-lg-fluid">
        <ul>
            <li><a href="/">{{ __('home.home') }}</a></li>
            @if (App::getLocale() == 'en')
            <li>  {{ $page->title_en }}</li>
            @elseif (App::getLocale() == 'ru')
            <li> {{ $page->title_ru }} </li>
            @else
            <li> {{ $page->title_tr }} </li>
            @endif
        </ul>
    </div>
</div>
<main id="tt-pageContent">

    {{-- <section class="ptb-100">
        <div class="container">
            <div class="main-default-content"> --}}
    @if (App::getLocale() == 'en')
        {!! htmlspecialchars_decode(nl2br($page->content_en)) !!}
    @elseif (App::getLocale() == 'ru')
        {!! htmlspecialchars_decode(nl2br($page->content_ru)) !!}
    @else
        {!! htmlspecialchars_decode(nl2br($page->content_tr)) !!}
    @endif
    {{-- </div>
        </div>
    </section> --}}
</main>
@endsection
