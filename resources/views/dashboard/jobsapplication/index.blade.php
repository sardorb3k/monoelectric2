@extends('layouts.dashboard')
@section('title', __('dashboard.jobs_title'))
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ __('dashboard.jobs_title') }}</h3>
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
                            <div class="nk-tb-col"><span class="sub-text">{{ __('dashboard.jobs_tcnumber') }}</span></div>
                            <div class="nk-tb-col"><span class="sub-text">{{ __('dashboard.jobs_firstname') }}</span></div>
                            <div class="nk-tb-col"><span class="sub-text">{{ __('dashboard.jobs_lastname') }}</span></div>
                            <div class="nk-tb-col"><span class="sub-text">{{ __('dashboard.jobs_birthdate') }}</span></div>
                            <div class="nk-tb-col"><span class="sub-text">{{ __('dashboard.jobs_phone') }}</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-end"> </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($jobs as $data)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col" onclick="window.location.href='{{ url('dashboard/jobsapplication', $data->id) }}'">
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
                                <div class="nk-tb-col" onclick="window.location.href='{{ url('dashboard/jobsapplication', $data->id) }}'">
                                    <span class="tb-lead">
                                        {{ $data->firstname  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col" onclick="window.location.href='{{ url('dashboard/jobsapplication', $data->id) }}'">
                                    <span class="tb-lead">
                                        {{ $data->lastname  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col" onclick="window.location.href='{{ url('dashboard/jobsapplication', $data->id) }}'">
                                    <span class="tb-lead">
                                        {{ $data->birthdate  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col" onclick="window.location.href='{{ url('dashboard/jobsapplication', $data->id) }}'">
                                    <span class="tb-lead">
                                        {{ $data->phone  }}
                                    </span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">
                                        <li>

                                            <form action="{{ route('dashboard.jobsapplication.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                    class="btn btn-sm btn-icon btn-trigger"><em
                                                        class="icon ni ni-delete"></em></a>
                                            </form>
                                        </li>
                                    </ul>
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
