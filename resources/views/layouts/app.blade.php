<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:ital,wght@0,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/page__contact.css" />
    <link rel="stylesheet" href="/css/page__testimonials.css" />
</head>

<body>
    <x-header />
        @yield('content')

    <x-footer />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script async src="/js/bundle.js"></script>
    <!-- modal - Make an Appointment -->
    <div class="modal fade" id="modalMakeAppointment" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body form-default modal-layout-dafault">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="icon-860796"></span>
                    </button>
                    <div class="modal-titleblock">
                        <div class="modal-title">Make an Appointment</div>
                    </div>
                    <form class="form-modal" id="jsFormMakeAppointment" method="post" novalidate="novalidate"
                        action="#">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="modalName01"
                                placeholder="Your Name *" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="modalEmail01"
                                        placeholder="Your e-mail address *" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="modalPhone01"
                                        placeholder="Your phone number" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="modalAddress" class="form-control" id="modalAddress"
                                placeholder="Address *" />
                        </div>
                        <div class="form-group">
                            <div class="custom-select">
                                <select name="typeofservice" class="tt-select">
                                    <option value="Service">Service</option>
                                    <option value="Service 02">Service 02</option>
                                    <option value="Service 03">Service 03</option>
                                    <option value="Service 04">Service 04</option>
                                    <option value="Service 05">Service 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="date" placeholder="Date of visit" autocomplete="off"
                                data-timepicker="true" class="js_datepicker-1 form-control" type="text" />
                            <div class="form-group__icon icon-747993"></div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your comment"></textarea>
                        </div>
                        <button type="submit" class="tt-btn btn__color01">
                            <span class="icon-lightning"></span>Explore services
                        </button>
                        <div class="tt-modal-message">Form sent successfully</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="js-backtotop" class="tt-back-to-top"><i class="icon-lightning"></i></a>
    <script>
        var giftofspeed = document.createElement("link");
        giftofspeed.rel = "stylesheet";
        giftofspeed.href = "/css/styles__loaded_later.css";
        giftofspeed.type = "text/css";
        var godefer = document.getElementsByTagName("link")[0];
        godefer.parentNode.insertBefore(giftofspeed, godefer);
    </script>
</body>

</html>
