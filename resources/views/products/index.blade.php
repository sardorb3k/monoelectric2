@extends('layouts.app')
@if (App::getLocale() == 'en')
    @section('title', 'a')
@elseif (App::getLocale() == 'ru')
    @section('title', 'a')
@else
    @section('title', 'a')
@endif
@section('content')
    <link rel="stylesheet" href="css/page__shop.css" />
    <link rel="stylesheet" href="css/page__block-aside.css" />
    <div class="tt-breadcrumb" style="background-image: url('/images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="/">{{ __('home.home') }}</a></li>
                <li> {{ __('home.products_title') }}</li>
            </ul>
        </div>
    </div>
    <main id="tt-pageContent">
        <div class="section-indent">
            <div class="container container-lg-fluid">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn tt-aside" id="aside-js">
                        <div class="tt-block-aside tt-block-aside__shadow">
                            <h3 class="tt-aside-title">{{ __('home.products_category') }}</h3>
                            <div class="tt-aside-content">
                                <nav class="nav-categories">
                                    <ul>
                                        @foreach ($category as $data)
                                            <li><a href="#">{{ $data->name_tr }}</a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-9">
                        <div class="section-title text-left">
                            <div class="section-title__02">{{ __('home.products_title') }}</div>
                        </div>
                        <div id="tt-product-listing" class="tt-product-listing row">
                            @forelse ($products as $product)
                                <div class="col-6 col-md-4 tt-col-item">
                                    <div class="tt-product">
                                        <div class="tt-product__img">
                                            <a href="{{ url('our-products/'.$product->id) }}"><img src="{{ asset('uploads/' . $product->image) }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="tt-product__description">
                                            <h2 class="tt-product__title">
                                                <a href="{{ url('our-products/'.$product->id) }}">
                                                    @if (App::getLocale() == 'en')
                                                        {{ $product->name_en }}
                                                    @elseif (App::getLocale() == 'ru')
                                                        {{ $product->name_ru }}
                                                    @else
                                                        {{ $product->name_tr }}
                                                    @endif
                                                </a>
                                            </h2>
                                            {{-- <div class="tt-price">
                                                <a href="a">
                                                    Review Catalog
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        {{-- <div class="tt-pagination">
                            <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">8</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    @endsection
