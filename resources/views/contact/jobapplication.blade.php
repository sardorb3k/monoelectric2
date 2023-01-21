@extends('layouts.app')

@section('content')
    <div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="index.html">{{ __('home.home') }}</a></li>
                <li>{{ __('contact.jobs_title') }}</li>
            </ul>
        </div>
    </div>

    <main id="tt-pageContent">
        <div class="section-indent">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    {{-- <div class="section-title__01">Contact Form</div> --}}
                    <div class="section-title__02">{{ __('contact.jobs_title') }}</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <style>
                            .button-in {

                                display: inline-flex;
                                flex-direction: row;
                                flex-wrap: nowrap;
                                justify-content: center;
                                align-items: center;
                                font-size: 14px;
                                line-height: 17px;
                                padding: 10px 23px 10px;
                                position: relative;
                                font-family: var(--default_font2);
                                border: 1px solid transparent;
                                border-radius: var(--radius);
                                background-color: var(--default_color02);
                                color: #fff;
                            }
                        </style>
                        <form action="{{ route('jobs.form') }}" class="form-default" method="post" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="identificationnumber" class="form-control"
                                    placeholder="{{ __('contact.jobs_idnumber') }} *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control"
                                    placeholder="{{ __('contact.jobs_firstname') }} *" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control"
                                    placeholder="{{ __('contact.jobs_lastname') }} *" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="birthdate" class="form-control"
                                    placeholder="{{ __('contact.jobs_birthdate') }} *" required>
                            </div>
                            <div class="form-group">
                                <p>{{ __('contact.jobs_gender') }}</p>
                                <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="gender" value="male">
                                        {{ __('contact.jobs_gender_male') }}
                                    </label>
                                <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="gender" value="female">
                                        {{ __('contact.jobs_gender_female') }}
                                    </label>
                            </div>
                            <div class="form-group">
                                <p>{{ __('contact.jobs_married') }}</p>
                                <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="married" value="yes">
                                        {{ __('contact.jobs_married_yes') }}
                                    </label>
                                    <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="married" value="no">
                                        {{ __('contact.jobs_married_no') }}
                                    </label>
                            </div>
                            <div class="form-group">
                                <p>{{ __('contact.jobs_license') }}</p>
                                <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="license" value="yes">
                                        {{ __('contact.jobs_license_yes') }}
                                    </label>
                                    <label class="button-in" style="color: #fff;">
                                        <input id="teklisecimkutusu51" type="radio" name="license" value="no">
                                        {{ __('contact.jobs_license_no') }}
                                    </label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control"
                                    placeholder="{{ __('contact.jobs_email') }} *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phonenumber" class="form-control"
                                    placeholder="{{ __('contact.jobs_phone') }} *" required />
                            </div>
                            <div class="form-group">
                                <input type="file" name="upload" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="4" placeholder="{{ __('contact.jobs_textarea') }} *"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <div class="tt-notes text-center">
                                    All Mono Electrical work must be done by a qualified licensed
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
                                    <span class="icon-lightning"></span>{{ __('contact.jobs_button') }}
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
