@extends('layouts.app')

@section('content')
    <div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="index.html">{{ __('home.home') }}</a></li>
                <li>{{ __('contact.dealer_title') }}</li>
            </ul>
        </div>
    </div>

    <main id="tt-pageContent">
        <div class="section-indent">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    {{-- <div class="section-title__01">Contact Form</div> --}}
                    <div class="section-title__02">{{ __('contact.dealer_title') }}</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('dealrerequest.form') }}" class="form-default" method="post"
                            novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="dealername" class="form-control"
                                    placeholder="{{ __('contact.dealer_name') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="{{ __('contact.dealer_address') }} *">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('contact.dealer_email') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="{{ __('contact.dealer_phone') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="gsm" class="form-control" placeholder="{{ __('contact.dealer_gsm') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="faks" class="form-control" placeholder="{{ __('contact.dealer_faks') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="taxadministration" class="form-control" placeholder="{{ __('contact.dealer_taxadministration') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="taxnumber" class="form-control" placeholder="{{ __('contact.dealer_taxnumber') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="website" class="form-control" placeholder="{{ __('contact.dealer_website') }} *">
                            </div>
                            <div class="form-group">
                                <textarea name="shippingaddress" class="form-control" rows="4" placeholder="{{ __('contact.dealer_address') }} *"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="addresspayment" class="form-control" rows="4" placeholder="{{ __('contact.dealer_addresspayment') }} *"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <div class="tt-notes text-center">
                                    All Electrical work must be done by a qualified licensed
                                    electrician.
                                </div>
                            </div> --}}
                            @if (session('success') || session('error'))
                                <div class="alert @if (session('error')) alert-error @endif shadow-lg">
                                    <div>
                                        <span>{{ session('success') }} {{ session('error') }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>{{ __('contact.dealer_button') }}
                                </button>
                            </div>
                            <div class="tt-modal-message">Form sent successfully</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
