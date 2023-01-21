@extends('layouts.app')

@section('content')
    <div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contacts</li>
            </ul>
        </div>
    </div>

    <main id="tt-pageContent">
        <div class="map-contact" id="map-contact"></div>
        <div class="section-indent-extra">
            <div class="container container-lg-fluid">
                <div class="section__wrapper02 tt-contact-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact">
                                <div class="tt-icon"><i class="icon-map-marker"></i></div>
                                <div class="tt-content">
                                    <div class="tt-title">Address:</div>
                                    <address>
                                        {{ $information->site_address }}
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact">
                                <div class="tt-icon">
                                    <i class="icon-clock-circular-outline-1"></i>
                                </div>
                                <div class="tt-content">
                                    <div class="tt-title">Work Hours:</div>
                                    Mon-Fri 08:00 AM - 05:00 PM<br />Sat-Sun: Emergency only
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact">
                                <div class="tt-icon"><i class="icon-telephone"></i></div>
                                <div class="tt-content">
                                    <div class="tt-title">Phone Numbers:</div>
                                    @forelse (json_decode($information->site_phone) as $phones)
                                        <address>
                                            <a href="tel:{{ $phones->phone }}">{{ $phones->phone }}</a>
                                        </address>

                                    @empty
                                    <address>
                                        not phone
                                    </address>

                                    @endforelse
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
                    <div class="section-title__01">Contact Form</div>
                    <div class="section-title__02">Get In Touch with Us</div>
                    <div class="section-title__03">
                        Are you stumped by a home wiring project or problem? Fill out the
                        form with the details of your situation and we can come to your
                        aid.
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('contact.form') }}" class="form-default" method="post"
                            novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name *" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Your e-mail address *" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject *" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phonenumber" class="form-control"
                                            placeholder="Your phone number *" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="4" placeholder="Qustion In Detail *"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="tt-notes text-center">
                                    All Electrical work must be done by a qualified licensed
                                    electrician.
                                </div>
                            </div>
                            @if (session('success') || session('error'))
                                <div class="section-title__01 @if (session('error')) alert-error @endif shadow-lg">
                                    <div>
                                        <span>{{ session('success') }} {{ session('error') }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>Contact us
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
