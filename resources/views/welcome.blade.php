@extends('layouts.app')

@section('content')

<div class="container-indent no-margin mainSlider-wrapper">
    <div id="js-mainSlider" class="mainSlider">
      <div class="slide">
        <picture class="img--holder"
          ><source
            srcset="images/mainslide-01-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-01-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-01-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-01-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source srcset="images/mainslide-01.jpg" type="image/jpg" />
          <source srcset="images/mainslide-01.jpg" type="image/jpg" />
          <img src="images/mainslide-01.jpg" alt=""
        /></picture>
        <div class="slide-content">
          <div
            class="container text-center js-rotation"
            data-animation="fadeInUpSm"
            data-animation-delay="0s"
          >
            <div class="tt-title-01">Keeping You Wired</div>
            <div class="tt-title-02">
              We’re the Current<br />Specialist!
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <picture class="img--holder"
          ><source
            srcset="images/mainslide-02-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-02-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-02-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-02-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source srcset="images/mainslide-02.jpg" type="image/jpg" />
          <source srcset="images/mainslide-02.jpg" type="image/jpg" />
          <img src="images/mainslide-02.jpg" alt=""
        /></picture>
        <div class="slide-content">
          <div
            class="container text-center js-rotation"
            data-animation="fadeInUpSm"
            data-animation-delay="0s"
          >
            <div class="tt-title-01">Making Our Clients Happier</div>
            <div class="tt-title-02">
              Best Services<br />for Your Family
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <picture class="img--holder"
          ><source
            srcset="images/mainslide-03-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-03-sm.jpg"
            media="(max-width: 767px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-03-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source
            srcset="images/mainslide-03-md.jpg"
            media="(max-width: 1024px)"
            type="image/jpg" />
          <source srcset="images/mainslide-03.jpg" type="image/jpg" />
          <source srcset="images/mainslide-03.jpg" type="image/jpg" />
          <img src="images/mainslide-03.jpg" alt=""
        /></picture>
        <div class="slide-content">
          <div
            class="container text-center js-rotation"
            data-animation="fadeInUpSm"
            data-animation-delay="0s"
          >
            <div class="tt-title-01">We Can Light Everything</div>
            <div class="tt-title-02">Nothing is Impossible<br />for Us</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="container order-form-wrapper container-lg-fluid container-lg__no-gutters"
  >
    <div class="order-form">
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="section-indent">
    <div class="container container-lg-fluid">
      <div class="layout01 layout01__img-more">
        <div class="layout01__img">
          <div class="tt-img-main">
            <picture
              ><source
                srcset="/images/layout01-img01.jpg"
                type="image/jpg" />
              <source srcset="/images/layout01-img01.jpg" type="image/jpg" />
              <img src="images/layout01-img01.jpg" alt=""
            /></picture>
          </div>
          <div class="tt-img-more left-bottom">
            <picture
              ><source
                srcset="/images/layout01-img02.jpg"
                type="image/jpg" />
              <source srcset="images/layout01-img02.jpg" type="image/jpg" />
              <img src="images/layout01-img02.jpg" alt=""
            /></picture>
          </div>
        </div>
        <div class="layout01__content">
          <div class="layout01__content-wrapper">
            <div class="section-title text-left">
              <div class="section-title__02">
                MONO ELEKTRİK
              </div>
            </div>
            <p>
                Mono Electric 2011 yılında 14.000 m² kapalı alanda kurulmuş İstanbul Hadımköydeki fabrikasında üretime başladı. Teknolojik yenilikleri yakından takip ederek sürekli gelişen Mono Electric, üretim süreçlerinin tamamında otomasyon yatırımları ile sektöründe öncü marka olmuştur. Sektöründe en yeni teknolojileri kullanan Mono Electric yüksek kalitede ürünler üretmektedir.
                <br>
                Mono Electric ürettiği tüm ürünlerde TSE, CE, TÜV Rheinland belgeleri alarak kalitesini tescillemiştir. Ayrıca tüm ürün dizaynlarını ve markalarını Türk Patent Enstitüsü tarafından dünyada 136 ülkede tescillendirmiştir. En modern teknolojik ekipmanlara sahip kalite labaratuvarlarında ISO 9001 kalite yönetim sistemine göre TSE, CE, TÜV Rheinland standartlarına göre ürettiği ürünlerin testlerini yapmaktadır.
            </p>
            <div class="tt-data-info">
              <div class="tt-item">
                <a href="{{ url('our-products') }}">
                <button class="tt-btn btn__color01" type="submit">
                    <span class="icon-lightning"></span>DAHA FAZLA</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-indent">
    <div class="container container-md-fluid">
      <div class="section-title max-width-01">
        <div class="section-title__02">Our Projects</div>
      </div>
      <div
        id="filter-layout"
        class="row justify-content-center gallery-innerlayout-wrapper js-wrapper-gallery"
      >
      @foreach ($products as $product)
        <div class="col-4 col-md-3 col-custom-item5 residences show all">
          <a href="{{ url('our-products/'.$product->id) }}" class="tt-gallery"
            ><div class="gallery__icon"></div>
            <img
              class="lazyload"
              src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
              data-src="{{ asset('uploads/'.$product->image) }}"
              alt=""
          /></a>
        </div>
      @endforeach
        <div class="col-12 text-center tt-top-more" style="display: block">
            <a href="{{ url('our-products/') }}" class="tt-link tt-link__lg">View all projects<span class="icon-arrowhead-pointing-to-the-right-1"></span></a>
          </div>
      </div>
    </div>
  </div>
  <div class="section-indent">
    <div class="tt-box01 lazyload" data-bg="images/box01-bg02-desktop.jpg">
      <div class="container">
        <div class="tt-box01__holder">
          <div class="tt-box01__video">
            <a
              href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
              class="tt-video js-video-popup"
              ><i class="icon-arrowhead-pointing-to-the-right-1"></i
            ></a>
          </div>
          <div class="tt-box01__description">
            <h4 class="tt-box01__title">
                CATALOG
            </h4>
            <p>
                You can download our online catalog for free by clicking the button below.
            </p>
            <div class="tt-row-btn">
              <a
                class="tt-btn btn__color01"
                data-toggle="modal"
                data-target="#modalMakeAppointment"
                href="{{ url('uploads/mono-elektrik-fiyat-listesi.pdf') }}"
                ><span class="icon-lightning"></span>Download</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-indent" style="margin-top: 0px">
    <div class="tt-slideinfo-wrapper slick-type01">
      <div class="tt-slideinfo">
        <div class="tt-item__bg">
          <div
            data-bg="/uploads/info.jpg"
            class="lazyload tt-item__bg-img"
          ></div>
          <div class="tt-item__bg-top"></div>
        </div>
        <div class="tt-item__content">
          <div class="tt-item__title">
            <span class="tt-icon"
              ><img
                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                class="lazyload"
                data-src="/images/slideinfo-marker.png"
                alt="" /></span
            ><span class="tt-text">INFORMATION CENTER</span>
          </div>
          <div class="tt-item__description">
            We offer the highest level of responsiveness and reliability,
            including on-line job management and reporting. Our highly
            experienced contractors across the nation ensure that your
            premises are always maintained and compliant.
          </div>
          <div class="tt-item__btn"><a href="{{ url('/page/information-center') }}">+</a></div>
        </div>
      </div>
      <div class="tt-slideinfo">
        <div class="tt-item__bg">
          <div
            data-bg="/uploads/info2.jpeg"
            class="lazyload tt-item__bg-img"
          ></div>
          <div class="tt-item__bg-top"></div>
        </div>
        <div class="tt-item__content">
          <div class="tt-item__title">
            <span class="tt-icon"
              ><img
                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                class="lazyload"
                data-src="/images/slideinfo-marker.png"
                alt="" /></span
            ><span class="tt-text">DEALER REQUEST FORM</span>
          </div>
          <div class="tt-item__description">
            We offer the highest level of responsiveness and reliability,
            including on-line job management and reporting. Our highly
            experienced contractors across the nation ensure that your
            premises are always maintained and compliant.
          </div>
          <div class="tt-item__btn"><a href="{{ url('/page/dealer-request') }}">+</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection
