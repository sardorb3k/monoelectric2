@extends('layouts.app')
@if (App::getLocale() == 'en')
    @section('title', $product->name_en)
@elseif (App::getLocale() == 'ru')
    @section('title', $product->name_ru)
@else
    @section('title', $product->name_tr)
@endif
@section('content')
    <link rel="stylesheet" href="/css/page__shop.css" />
    <link rel="stylesheet" href="/css/page__block-aside.css" />
    <link rel="stylesheet" href="/css/page__product-single.css">
    <div class="tt-breadcrumb" style="background-image: url('/images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="/">{{ __('home.home') }}</a></li>
                <li>
                    @if (App::getLocale() == 'en')
                        {{ $product->name_en }}
                    @elseif (App::getLocale() == 'ru')
                        {{ $product->name_ru }}
                    @else
                        {{ $product->name_tr }}
                    @endif</li>
            </ul>
        </div>
    </div>
    <main id="tt-pageContent">
        <div class="section-indent">
            <!-- mobile product slider  -->

            <div class="tt-mobile-product-layout d-block d-sm-none">
                <div class="tt-mobile-product-slider slick-type01" id="mobile-product">
                    <div><img src="/uploads/{{ $product->image }}" alt="" style="width: 300px"/></div>
                </div>
            </div><!-- /mobile product slider  -->
            <div class="container container-lg-fluid">
                <div class="row">
                    <div class="col-5 col-lg-5 d-none d-sm-block">
                        <div class="tt-product-single-img">
                            <div><img class="zoom-product" src="/uploads/{{ $product->image }}" style="width: 500px"
                                    data-zoom-image="/uploads/{{ $product->image }}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-7">
                        <div class="product-single-info">
                            <div class="tt-tag">{{ $product->category }}</div>
                            <h1 class="tt-title">
                                @if (App::getLocale() == 'en')
                                    {{ $product->name_en }}
                                @elseif (App::getLocale() == 'ru')
                                    {{ $product->name_ru }}
                                @else
                                    {{ $product->name_tr }}
                                @endif
                            </h1>
                            <div class="tt-add-info">
                                <b>{{ __('home.product_desc') }}</b>
                                <ul>
                                    @if ($product->productcode)
                                        <li>{{ __('home.product_desc_pcode') }} <span>{{ $product->productcode }}</span></li>
                                    @endif
                                    @if ($product->quantitybox)
                                        <li>{{ __('home.product_desc_qbox') }} <span>{{ $product->quantitybox }}</span></li>
                                    @endif
                                    @if ($product->piecesinbox)
                                        <li>{{ __('home.product_desc_pbox') }} <span>{{ $product->piecesinbox }}</span></li>
                                    @endif
                                    @if ($product->grossweight)
                                        <li>{{ __('home.product_desc_gw') }} <span>{{ $product->grossweight }}</span></li>
                                    @endif
                                    @if ($product->volume)
                                        <li>{{ __('home.product_desc_v') }} <span>{{ $product->volume }}</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div class="section-indent">
        <div class="container container-lg-fluid">
          <div class="section-title">
            <div class="section-title__02">{{ __('home.product_similar') }}</div>
          </div>
          <div
            class="carusel-product js-carusel-product slick-type01"
            data-slick='{
						"slidesToShow": 4,
						"slidesToScroll": 1,
						"autoplaySpeed": 3500,
						"responsive": [
							{
								"breakpoint": 767,
								"settings": {
									"slidesToShow": 3,
									"slidesToScroll": 1
								}
							},
							{
								"breakpoint": 576,
								"settings": {
									"slidesToShow": 2,
									"slidesToScroll": 1
								}
							}
						]
				}'
          >
          @foreach ($products as $data)
            <div class="item">
              <div class="tt-product">
                <div class="tt-product__img">
                  <a href="{{ url('our-products/'.$data->id) }}"

                    ><img src="/uploads/{{ $data->image }}" alt=""
                  /></a>
                </div>
                <div class="tt-product__description">
                  <h2 class="tt-product__title">
                    <a href="{{ url('our-products/'.$data->id) }}"
                      >
                      @if (App::getLocale() == 'en')
                          {{ $data->name_en }}
                      @elseif (App::getLocale() == 'ru')
                          {{ $data->name_ru }}
                      @else
                          {{ $data->name_tr }}
                      @endif</a
                    >
                  </h2>
                </div>
              </div>
            </div>

          @endforeach
          </div>
        </div>
      </div>
    </main>

@endsection
