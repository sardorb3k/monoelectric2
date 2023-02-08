@extends('layouts.app')

@section('content')
    <div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
        <div class="container container-lg-fluid">
            <ul>
                <li><a href="/">{{ __('home.home') }}</a></li>
                <li>{{ __('contact.contact_title') }}</li>
            </ul>
        </div>
    </div>

    <main id="tt-pageContent">
        <div class="map-contact"><iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12009.680266863983!2d28.5967566!3d41.1908146!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6199de2fbd3086!2sMono%20Electrical%20Industry%20and%20Foreign%20Trade.%20Ltd.%20Sti.!5e0!3m2!1suz!2sus!4v1675097826661!5m2!1suz!2sus"
                style="border:0;width:100%;height:100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="section-indent-extra">
            <div class="container container-lg-fluid">
                <div class="section__wrapper02 tt-contact-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact">
                                <div class="tt-icon"><i class="icon-map-marker"></i></div>
                                <div class="tt-content">
                                    <div class="tt-title">{{ __('contact.contact_address') }}</div>
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
                                    <div class="tt-title">{{ __('contact.contact_workhours') }}</div>
                                    Mon-Fri 07:45 AM - 17:45 PM<br />Sat-Sun: Emergency only
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact">
                                <div class="tt-icon"><i class="icon-telephone"></i></div>
                                <div class="tt-content">
                                    <div class="tt-title">{{ __('contact.contact_phonenumber') }}</div>
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
                    <div class="section-title__01">{{ __('contact.contact_title') }}</div>
                    <div class="section-title__02">{{ __('contact.contact_form_title') }}</div>
                    <div class="section-title__03">
                        {{ __('contact.contact_form_desc') }}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('contact.form') }}" class="form-default" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('contact.contact_yourname') }}" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="{{ __('contact.contact_email') }}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control"
                                            placeholder="{{ __('contact.contact_subject') }}" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phonenumber" class="form-control"
                                            placeholder="{{ __('contact.contact_phonenumber') }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="4" placeholder="{{ __('contact.contact_message') }}" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="tt-notes text-center">
                                    {{ __('contact.contact_policy') }}
                                </div>
                            </div>

                            @if (session('success') || session('error'))
                                <div
                                    class="alert @if (session('error')) alert-error @endif @if (session('success')) alert-success @endif shadow-lg">
                                    <div>
                                        <span>{{ session('success') }} {{ session('error') }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>{{ __('contact.contact_button') }}
                                </button>
                            </div>
                            <div class="tt-modal-message">Form sent successfully</div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <style>
                .alert-danger {
                    color: #721c24;
                    background-color: #f8d7da;
                    border-color: #f5c6cb;
                }

                .alert {
                    position: relative;
                    padding: 0.75rem 1.25rem;
                    margin-bottom: 1rem;
                    border: 1px solid transparent;
                    border-radius: 0.25rem;
                }

                .alert-success {
                    color: #155724;
                    background-color: #d4edda;
                    border-color: #c3e6cb;
                }
            </style> --}}
        </div>
    </main>
@endsection
