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
                                                    <a href="{{ route('dashboard.pages.create') }}"
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
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist is-compact">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-end"> </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($pages as $page)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <div class="user-card">
                                        <div class="user-name">
                                            <a href="{{ route('dashboard.pages.show', $page->slug) }}">
                                                <span class="tb-lead">
                                                    {{ App::getLocale() == 'en' ? $page->title_en : '' }}
                                                    {{ App::getLocale() == 'ru' ? $page->title_ru : '' }}
                                                    {{ App::getLocale() == 'tr' ? $page->title_tr : '' }}
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <span
                                        class="tb-status text-{{ $page->status == 'inactive' ? 'danger' : 'success' }}">{{ $page->status == 'active' ? 'Active' : 'Inactive' }}</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">
                                        <li>

                                            <form action="{{ route('dashboard.pages.destroy', $page->id) }}" method="POST">
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
                {{ $pages->links() }}
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
