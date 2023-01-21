<footer id="tt-footer" style="margin-top:100px">
    <div class="footer-wrapper">
        {{-- <div class="container container-lg-fluid container-lg__no-gutters">
                <form id="subscribeform" method="post" novalidate="novalidate" action="#">
                    <div class="f-form">
                        <div class="f-form__label">Subscribe to Our Newsletter</div>
                        <div class="f-form__input">
                            <input type="text" name="email" class="form-control"
                                placeholder="Your e-mail address" />
                        </div>
                        <div class="f-form__btn">
                            <button class="tt-btn btn__color02" type="submit">
                                <span class="icon-482948 tt-icon-left"></span> Subscribe
                                &nbsp;<span class="tt-short-text">now</span>
                            </button>
                        </div>
                        <div class="tt-modal-message">Form sent successfully</div>
                    </div>
                </form>
            </div> --}}
        <div class="container container-lg-fluid container-lg__no-gutters">
            <div class="f-holder row no-gutters">
                <div class="col-xl-7">
                    <div class="additional-strut">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="f-logo">
                                    <a href="{{ url('/') }}" class="f-logo">
                                        <span class="tt-icon" style="width: 150px;height:65px;">
                                            <img src="/{{ $information->site_logo_footer }}" alt="" /></span></a><!-- /logo -->
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="f-info-text">
                                    {{ $information->site_description }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <ul class="f-info-icon">
                                <li>
                                    <span class="icon-map-marker"></span> {{ $information->site_address }}
                                </li>
                                <li>
                                    <span class="icon-clock-circular-outline-1"></span>
                                    Mon-Fri 08:00 AM - 05:00 PM
                                </li>
                                <li>
                                    <a href="tel:{{ json_decode($information->site_phone)[0]->phone }}"><span class="icon-telephone"></span> {{ json_decode($information->site_phone)[0]->phone }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
            <div class="f-copyright row no-gutters">
                <div class="col-sm-auto">
                    &copy; 2023 {{ $information->site_name }}. All Rights Reserved.
                </div>
                <div class="col-sm-auto ml-sm-auto">
                    <ul class="f-social">
                        <li><a href="{{ $information->site_twitter }}" class="icon-twitter-logo-button"></a></li>
                        <li><a href="{{ $information->site_facebook }}" class="icon-facebook-logo-button"></a></li>
                        <li><a href="{{ $information->site_instagram }}" class="icon-instagram-logo"></a></li>
                        <li><a href="{{ $information->site_linkedin }}" class="icon-linkedin-logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
