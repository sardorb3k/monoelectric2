@extends('layouts.dashboard')
@section('title', 'System')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Site system</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    @include('components.dashboard.error')

    <div class="card card-bordered card-preview">
        <form method="POST" action="{{ route('dashboard.system.update') }}" class="form-validate" novalidate="novalidate"
            method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-inner">
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">System</span>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-name">Site name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-name" name="sitename" placeholder="JIU" value="{{ $system->site_name }}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-description">Site description</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-description" name="sitedescription" value="{{ $system->site_description }}"
                                        placeholder="JIU" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="logo">Logo</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input @error('phone') error @enderror"
                                            id="logo" name="sitelogo">
                                        <label class="form-file-label" for="logo">Choose image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="logo-footer">Logo footer</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input @error('phone') error @enderror"
                                            id="logo-footer" name="sitelogofooter">
                                        <label class="form-file-label" for="logo">Choose image footer</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">information</span>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-phone">Phone number</label>
                                <div class="form-control-wrap">
                                    <input type="tel" class="form-control @error('phone') error @enderror"
                                        id="site-phone" name="sitephonenumber" value="{{ $system->site_phone }}"
                                        placeholder="998 33 170 70 10" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-address">Site address</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-address" name="siteaddress" value="{{ $system->site_address }}"
                                        placeholder="Address" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-email">Email</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-email" name="siteemail" value="{{ $system->site_email }}"
                                        placeholder="info@jiu.uz" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Social media</span>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-instagram">Instagram</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-instagram" name="siteinstagram" value="{{ $system->site_instagram }}"
                                        placeholder="https://instagram.com/" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-facebook">Facebook</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-facebook" name="sitefacebook" value="{{ $system->site_facebook }}"
                                        placeholder="https://facebook.com/" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-youtube">Youtube</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-youtube" name="siteyoutube" value="{{ $system->site_youtube }}"
                                        placeholder="https://youtube.com/" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="site-telegram">Telegram</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('phone') error @enderror"
                                        id="site-telegram" name="sitetelegram" value="{{ $system->site_telegram }}"
                                        placeholder="https://telegram.org/" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-inner border-top">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $("#site-phone").inputmask({
            "mask": "999 (99) 999-99-99"
        });
    </script>
@endsection
