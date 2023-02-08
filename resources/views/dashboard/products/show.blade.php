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
                <form method="POST" action="{{ route('dashboard.products.update', $product->id) }}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">Name</span>
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="text" class="form-control @error('title') error @enderror"
                                            value="{{ $product->name_en }}" id="page-name" name="name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">Product code</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        value="{{ $product->productcode }}" id="productcode" name="productcode" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">quantity box</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        value="{{ $product->quantitybox }}" id="quantitybox" name="quantitybox" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <span class="preview-title-lg overline-title">pieces in box</span>
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        value="{{ $product->piecesinbox }}" id="piecesinbox" name="piecesinbox" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">gross weight</span>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        value="{{ $product->grossweight }}" id="grossweight" name="grossweight" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">volume</span>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        value="{{ $product->volume }}" id="volume" name="volume" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="category">Category</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="category">
                                            @forelse ($category as $data_c)
                                                <option value="{{ $data_c->id }}"
                                                    {{ $data_c->id == $product->category_id ? 'selected' : '' }}>
                                                    {{ $data_c->name_en }}</option>
                                            @empty
                                                <option>No</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-sm-6">
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
                        </div> --}}

                        <div class="col-sm-6">
                            <div class="form-group">
                                <span class="preview-title-lg overline-title">Images</span>
                                <div class="form-control-wrap">
                                    <div id="pagename_uz">
                                        <input type="file" class="form-control @error('title') error @enderror"
                                            id="page-name" name="image">
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
