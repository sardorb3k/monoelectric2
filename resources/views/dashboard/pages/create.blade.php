@extends('layouts.dashboard')
@section('title', 'Pages')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Pages</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <form method="POST" action="{{ route('dashboard.pages.store') }}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    <span class="preview-title-lg overline-title">Name</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            id="page-name" name="pagename_tr" required>
                                        </textarea>
                                    </div>
                                    <div id="pagename_ru" style="display: none;">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            id="page-name" name="pagename_ru" required>
                                        </textarea>
                                    </div>
                                    <div id="pagename_en" style="display: none;">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            id="page-name" name="pagename_en" required>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Content</span>
                    <ul class="custom-control-group mb-3" id="content">
                        <li>
                            <div class="custom-control custom-checkbox custom-control-pro no-control checked">
                                <input type="radio" class="custom-control-input" name="content[]" value="tr"
                                    id="languageuz" checked>
                                <label class="custom-control-label" for="languageuz">TR</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox custom-control-pro no-control">
                                <input type="radio" class="custom-control-input" name="content[]" value="ru"
                                    id="languageru">
                                <label class="custom-control-label" for="languageru">RU</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox custom-control-pro no-control checked">
                                <input type="radio" class="custom-control-input" name="content[]" value="en"
                                    id="languageen">
                                <label class="custom-control-label" for="languageen">EN</label>
                            </div>
                        </li>
                    </ul>
                    <div id="uz">
                        <textarea name="content_tr"></textarea>
                    </div>
                    <div id="ru" style="display: none;">
                        <textarea name="content_ru"></textarea>
                    </div>
                    <div id="en" style="display: none;">
                        <textarea name="content_en"></textarea>
                    </div>
                    <hr class="preview-hr">
                    <div class="card-inner border-top">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $('#content input[type="radio"]').on('click change', function(e) {
            var id = $(this).attr('id');
            var value = $(this).val();
            if (value == 'uz') {
                // Content
                $('#uz').show();
                $('#ru').hide();
                $('#en').hide();
                // Name
                $('#pagename_uz').show();
                $('#pagename_ru').hide();
                $('#pagename_en').hide();
            } else if (value == 'ru') {
                // Content
                $('#uz').hide();
                $('#ru').show();
                $('#en').hide();
                // Name
                $('#pagename_uz').hide();
                $('#pagename_ru').show();
                $('#pagename_en').hide();
            } else if (value == 'en') {
                // Content
                $('#uz').hide();
                $('#ru').hide();
                $('#en').show();
                // Name
                $('#pagename_uz').hide();
                $('#pagename_ru').hide();
                $('#pagename_en').show();
            }
        });
    </script>
@endsection
