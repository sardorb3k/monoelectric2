@extends('layouts.dashboard')
@section('title', 'Products')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Products</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <form method="POST" action="{{ route('dashboard.products.store') }}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">Name</span>
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            id="page-name" name="name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">Product code</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="productcode" name="productcode" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">quantity box</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="quantitybox" name="quantitybox" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">pieces in box</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="piecesinbox" name="piecesinbox" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">gross weight</span>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="grossweight" name="grossweight" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">volume</span>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="volume" name="volume" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <label class="form-label" for="category">Category</label>
                                        <select class="form-control" id="category">
                                            @forelse ($category as $data_c)
                                                <option value="{{ $data_c->id }}">{{ $data_c->name_en }}</option>
                                            @empty
                                                <option>No</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap ">
                                    <label class="form-label" for="colors">Colors</label>
                                    <div class="form-control-select">
                                        <select class="form-control" id="colors">
                                            @forelse ($colors as $data)
                                                <option value="{{ $data->id }}">{{ $data->name_en }}</option>
                                            @empty
                                                <option>No</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">Images</span>
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="file" class="form-control @error('title') error @enderror"
                                            id="page-name" name="image" required>
                                    </div>
                                </div>
                            </div>
                        </div>
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
