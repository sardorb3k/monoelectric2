@extends('layouts.dashboard')
@section('title', 'Products')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Category</h3>
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
                                                    <a href="{{ route('dashboard.category.create') }}"
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $page)
                                <tr class="nk-tb-item" onclick="window.location.href='{{ route('dashboard.category.show', $page->id) }}'">
                                    <td class="nk-tb-col">
                                        <div class="user-card">
                                            <div class="user-info">
                                                <span class="tb-lead">
                                                    {{ $page->name_en }}</span>
                                            </div>
                                        </div>
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
