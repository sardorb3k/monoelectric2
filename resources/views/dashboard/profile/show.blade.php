@extends('layouts.dashboard')
@section('title', __('dashboard.profile_title'))
@section('content')


    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><span>My Profile</span></div>
                <h2 class="nk-block-title fw-normal">Account Info</h2>
                <div class="nk-block-des">
                    <p>You have full control to manage your own account setting. <span class="text-primary"><em
                                class="icon ni ni-info"></em></span></p>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Full Name</span>
                            <span class="data-value"> {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em
                                    class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Email</span>
                            <span class="data-value"> {{ Auth::user()->phone }}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em
                                    class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                </div><!-- .nk-data -->
            </div><!-- .card -->
            @if (session('success') || session('error'))
                <div class="alert alert-icon alert-primary" style="margin-top: 20px" role="alert">
                    <em class="icon ni ni-alert-circle"></em>
                    <p>{{ session('success') }} {{ session('error') }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#password">Password</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="{{ route('dashboard.profile.update', $information->id) }}" class="form-validate"
                                novalidate="novalidate" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="first-name">First Name</label>
                                            <input type="text" class="form-control form-control-lg" id="first-name"
                                                value="{{ $information->firstname }}" placeholder="Enter First name"
                                                required name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="last-name">Last Name</label>
                                            <input type="text" class="form-control form-control-lg" id="last-name"
                                                value="{{ $information->lastname }}" placeholder="Enter Last name" required
                                                name="lastname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control form-control-lg" id="phone"
                                                name="phone" required value="{{ $information->phone }}" minlength=""
                                                placeholder="Enter Phone number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <input type="hidden" name="update_action" value="personal">
                                                <input type="hidden" name="id" value="{{ $information->id }}">
                                                <a href="#"
                                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                                    class="btn btn-lg btn-primary">Update Profile</a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <script>
                            $("#phone").inputmask({
                                "mask": "999 (99) 999-99-99"
                            });
                        </script>
                        <div class="tab-pane" id="password">
                            <form action="{{ route('dashboard.profile.update', $information->id) }}"
                                class="form-validate" novalidate="novalidate" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password *</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-lock"></em>
                                                </div>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password_confirmation">Confirm
                                                Password *</label>
                                            <div class="form-control-wrap">
                                                <div class="toggle-password form-icon form-icon-right">
                                                    <em class="icon ni ni-lock"></em>
                                                </div>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <input type="hidden" name="update_action" value="password">
                                                <input type="hidden" name="id" value="{{ $information->id }}">
                                                <a href="#"
                                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                                    class="btn btn-lg btn-primary">Update Password</a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection
