@extends('layouts.dashboard')
@section('title', 'Dealerrequest')
@section('content')
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ __('dashboard.dealerrequest_title') }} <strong class="text-primary small">#{{ $dealerrequest->id }}</strong>
                </h3>
                <div class="nk-block-des text-soft">
                    <ul class="list-inline">
                        <li>Created At: <span class="text-base">{{ $dealerrequest->created_at }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="nk-block-head-content"><a href="{{ url('dashboard/dealerrequest') }}"
                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                        class="icon ni ni-arrow-left"></em><span>Back</span></a><a href="{{ url('dashboard/dealerrequest') }}"
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
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_fullname') }}</span>:<span>{{ $dealerrequest->dealername }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_address') }}</span>:<span>{{ $dealerrequest->address }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_email') }}</span>:<span>{{ $dealerrequest->email }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_phone') }}</span>:<span>{{ $dealerrequest->phone }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_gsm') }}</span>:<span>{{ $dealerrequest->gsm }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_faks') }}</span>:<span>{{ $dealerrequest->faks }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_taxadministration') }}</span>:<span>{{ $dealerrequest->taxadministration }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_taxnumber') }}</span>:<span>{{ $dealerrequest->taxnumber }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_website') }}</span>:<span>{{ $dealerrequest->website }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_shippingaddress') }}</span><br><span>{{ $dealerrequest->shippingaddress }}</span></li>
                            <li class="invoice-id"><span>{{ __('dashboard.dealerrequest_addresspayment') }}</span><br><span>{{ $dealerrequest->addresspayment }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->
@endsection
