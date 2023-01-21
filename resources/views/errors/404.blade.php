@extends('layouts.app')
@section('content')
    <div class="tt-breadcrumb" style="background-image: url('/images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="/">Home</a></li>
                <li>{{ __('errors.404.title') }}</li>
            </ul>
        </div>
    </div>
    <main id="tt-pageContent">
        <div class="section-indent">
            <div class="container container-lg-fluid">
                <div class="layout01__content-wrapper" style="min-height: 200px;text-align: center;">
                    <div class="section-title" style="text-align: center;">
                        <div class="section-title__01">{{ __('errors.404.title') }}</div>
                        <div class="section-title__02">{{ __('errors.404.description') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
