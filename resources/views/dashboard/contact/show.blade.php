@extends('layouts.dashboard')
@section('title', 'Contact')
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ __('dashboard.contact_title') }} <strong class="text-primary small">#{{ $contact->id }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Created At: <span class="text-base">{{ $contact->created_at }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content"><a href="{{ url('dashboard/contact') }}"
                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                        class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="{{ url('dashboard/contact') }}"
                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                        class="icon ni ni-arrow-left"></em></a></div>
        </div>
    </div>
    @include('components.dashboard.error')
    <div class="nk-block">
        <div class="invoice">
            <div class="invoice-wrap">
                <div class="invoice-head">
                    <div class="invoice-desc" style="width: 100%;">
                        <ul class="list-plain">
                            <li class="invoice-id"><span>{{ __('dashboard.contact_fullname') }}</span>:<span>{{ $contact->fullname }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.contact_email') }}</span>:<span>{{ $contact->email }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.contact_phone') }}</span>:<span>{{ $contact->phone }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.contact_subject') }}</span>:<span>{{ $contact->subject }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.contact_message') }}</span><br><span>{{ $contact->message }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->
@endsection
