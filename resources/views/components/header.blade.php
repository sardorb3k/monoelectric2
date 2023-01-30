<nav class="panel-menu" id="mobile-menu">
    <ul></ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">Close</div>
        <div class="mm-backbtn">Back</div>
    </div>
</nav>
<header id="tt-header">
    <!-- holder-top (mobile) -->
    <div class="holder-top-mobile d-block d-md-none">
        <div class="h-topbox__content">
            <div class="tt-item">
                <div class="tt-item__icon">
                    <span class="icon-map-marker"></span>
                </div>
                <div class="tt-item__text">
                    <address>{{ $information->site_address }}</address>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-item__icon"><span class="icon-482948"></span></div>
                <div class="tt-item__text">
                    <a href="mailto:{{ $information->site_email }}">{{ $information->site_email }}</a>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-item__icon">
                    <span class="icon-telephone"></span>
                </div>
                <div class="tt-item__text">
                    <address>
                        <a href="tel:{{ json_decode($information->site_phone)[0]->phone }}">{{ json_decode($information->site_phone)[0]->phone }}</a>
                    </address>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-item__icon">
                    <span class="icon-clock-circular-outline-1"></span>
                </div>
                <div class="tt-item__text">
                    Mon-Fri 07:45 AM - 05:45 PM, Sat-Sun
                </div>
            </div>
        </div>
        <a href="#" class="h-topbox__btn" id="js-toggle-h-holder"><i class="tt-arrow down"></i></a>
    </div>
    <!-- /holder-top (mobile) -->
    <!-- holder-top (desktop) -->
    <div class="holder-top-desktop d-none d-md-block">
        <div class="container container-lg-fluid">
            <div class="row no-gutters">
                <div class="col-auto">
                    <div class="h-info01">
                        {{-- <div class="tt-item">
                            <address>
                                <span class="icon-map-marker"></span>{{ $information->site_address }}
                            </address>
                        </div> --}}
                        <div class="tt-item">
                            <span class="icon-clock-circular-outline-1"></span>Mon-Fri
                            07:45 AM - 05:45 PM
                        </div>
                    </div>
                </div>
                <div class="col-auto ml-auto">
                    <div class="tt-obj">
                        <div class="h-info02">
                            <div class="tt-item">
                                <address>
                                    <a href="tel:{{ json_decode($information->site_phone)[0]->phone }}"><span class="icon-telephone"></span>{{ json_decode($information->site_phone)[0]->phone }}</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /holder-top (desktop) -->
    <!-- holder- -->

    <div id="js-init-sticky">
        <div class="tt-holder-wrapper">
          <div class="container container-lg-fluid">
            <div class="tt-holder">
              <div class="tt-col-logo">
                <!-- logo -->
                        <a href="/" class="tt-logo tt-logo-alignment" style="width: 150px;height:65px;"><span
                            class="tt-icon"><img src="/logo.png" alt="" /></span></a><!-- /logo -->

              </div>
              <div class="tt-col-objects tt-col-wide text-center">
                <!-- desktop-nav -->
                <nav id="tt-nav">
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.home') }}</span>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.home') }}</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/our-products">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.products') }}</span>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.products') }}</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.corparate') }}</span>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.corparate') }}</span></div>
                                </div>
                            </a>
                            <ul>
                                <li><a href="{{ url('/page/aboutme') }}">{{ __('menu.corparate_aboutme') }}</a></li>
                                <li><a href="{{ url('/page/our-vision') }}">{{ __('menu.corparate_vision') }}</a></li>
                                <li><a href="{{ url('/page/our-mission') }}">{{ __('menu.corparate_mission') }}</a></li>
                                <li><a href="{{ url('/page/our-strategy') }}">{{ __('menu.corparate_strategy') }}</a></li>
                                <li><a href="{{ url('/page/our-quality-aapproach') }}">{{ __('menu.corparate_certifications') }}</a></li>
                                <li><a href="{{ url('/page/ar-ge') }}">{{ __('menu.corparate_arge') }}</a></li>
                                <li><a href="{{ url('/page/antibacterial-certificates') }}">{{ __('menu.corparate_antibacterial') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/page/our-quality-approach') }}">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.qualityapproach') }}</span>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.qualityapproach') }}</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/page/information-center') }}">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.informationcenter') }}</span>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.informationcenter') }}</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                <div class="electric-btn">
                                    <span class="text">{{ __('menu.contact') }}</span>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                    <div class="mask"><span>{{ __('menu.contact') }}</span></div>
                                </div>
                            </a>
                            <ul>
                                <li><a href="{{ url('/job-application') }}">{{ __('menu.jobsrequest') }}</a></li>
                                <li><a href="{{ url('/dealer-request') }}">{{ __('menu.dealerrequest') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /desktop-nav -->
              </div>
              <div class="tt-col-objects">
                <div class="tt-col__item d-block d-lg-none">
                  <a href="#" id="tt-menu-toggle" class="icon-545705"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</header>
