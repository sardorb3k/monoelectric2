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
                <form method="POST" action="{{ route('dashboard.products.update', $page->id) }}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <span class="preview-title-lg overline-title">Name</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            id="page-name" name="name" value="{{ $product->name }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Images</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="file" class="form-control @error('title') error @enderror"
                                            id="page-name" name="image" value="{{ $product->image }}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Upload</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="file" class="form-control @error('title') error @enderror"
                                            id="page-name" name="file" value="{{ $product->file }}" >
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
@endsection
