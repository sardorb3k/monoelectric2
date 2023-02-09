@extends('layouts.dashboard')
@section('title', __('dashboard.jobs_title'))
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ __('dashboard.jobs_title') }} <strong class="text-primary small">#{{ $jobs->id }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Created At: <span class="text-base">{{ $jobs->created_at }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content"><a href="{{ url('dashboard/jobsapplication') }}"
                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                        class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="{{ url('dashboard/jobsapplication') }}"
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
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_tcnumber') }}</span>:<span>{{ $jobs->tcidnumber }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_firstname') }}</span>:<span>{{ $jobs->firstname }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_lastname') }}</span>:<span>{{ $jobs->lastname }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_birthdate') }}</span>:<span>{{ $jobs->birthdate }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_gender') }}</span>:<span>{{ $jobs->gender }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_married') }}</span>:<span>{{ $jobs->married }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_license') }}</span>:<span>{{ $jobs->license }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_email') }}</span>:<span>{{ $jobs->email }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_phone') }}</span>:<span>{{ $jobs->phone }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.jobs_message') }}</span><br><span>{{ $jobs->message }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->
@endsection
