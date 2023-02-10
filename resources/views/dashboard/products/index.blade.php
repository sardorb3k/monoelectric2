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
    @include('components.dashboard.error')
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner position-relative card-tools-toggle">
                    <div class="card-title-group">
                        <div class="card-tools">
                        </div><!-- .card-tools -->
                        <div class="card-tools me-n1">
                            <ul class="btn-toolbar gx-1">
                                <li>
                                    <div class="toggle-wrap">
                                        <div class="toggle-content">
                                            <ul class="btn-toolbar gx-1">
                                                <li>
                                                    <a href="{{ route('dashboard.products.create') }}"
                                                        class="btn btn-trigger btn-icon">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .toggle-content -->
                                    </div><!-- .toggle-wrap -->
                                </li><!-- li -->
                            </ul><!-- .btn-toolbar -->
                        </div><!-- .card-tools -->
                    </div>
                </div><!-- .card-inner -->
                
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Product code</span></th>
                                    <div class="nk-tb-col tb-col-mb"> </div>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $page)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col" onclick="window.location.href='{{ route('dashboard.products.show', $page->id) }}'">
                                        <div class="user-card">
                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                <span><img src="{{ url('uploads/'.$page->image) }} "
                                                    alt="{{ $page->name_en }}"></span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">
                                                    {{ App::getLocale() == 'en' ? $page->name_en : '' }}
                                                    {{ App::getLocale() == 'ru' ? $page->name_ru : '' }}
                                                    {{ App::getLocale() == 'tr' ? $page->name_tr : '' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb" data-order="{{ $page->productcode }}" onclick="window.location.href='{{ route('dashboard.products.show', $page->id) }}'">
                                        <span class="tb-amount">{{ $page->productcode }}</span>
                                    </td>

                                    <td class="nk-tb-col tb-col-mb" data-order="{{ $page->productcode }}" >
                                    <form action="{{ route('dashboard.products.destroy', $page->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                            class="btn btn-sm btn-icon btn-trigger"><em
                                                class="icon ni ni-delete"></em></a>
                                    </form>
                                </td>
                                </tr><!-- .nk-tb-item  -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .card-preview -->
                {{ $data->links() }}
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
