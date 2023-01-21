@extends('layouts.dashboard')
@section('title', 'Contact')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Contact</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    @include('components.dashboard.error')
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist is-compact">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span class="sub-text">TC number</span></div>
                            <div class="nk-tb-col"><span class="sub-text">firstname</span></div>
                            <div class="nk-tb-col"><span class="sub-text">lastname</span></div>
                            <div class="nk-tb-col"><span class="sub-text">birthdate</span></div>
                            <div class="nk-tb-col"><span class="sub-text">phone</span></div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($jobs as $data)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <div class="user-card">
                                        <div class="user-name">
                                            <a href="{{ url('dashboard/jobsapplication', $data->id) }}">
                                                <span class="tb-lead">
                                                    {{ $data->tcidnumber  }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">
                                        {{ $data->firstname  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">
                                        {{ $data->lastname  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">
                                        {{ $data->birthdate  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">
                                        {{ $data->phone  }}
                                    </span>
                                </div>
                            </div><!-- .nk-tb-item -->
                        @endforeach
                    </div><!-- .nk-tb-list -->
                </div><!-- .card-inner -->
                {{ $jobs->links() }}
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
