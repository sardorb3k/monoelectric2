            <div class="nk-header nk-header-fluid is-theme">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="{{ url('/dashboard') }}" class="logo-link">
                                <img class="logo-light logo-img" src="{{ asset('logo.png') }}"
                                    srcset="{{ asset('logo.png') }}" alt="logo">
                                <img class="logo-dark logo-img" src="{{ asset('logo.png') }}"
                                    srcset="{{ asset('logo.png') }}" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="{{ url('/dashboard') }}" class="logo-link">
                                        <img class="logo-light logo-img" src="{{ asset('logo.png') }}"
                                            srcset="{{ asset('logo.png') }}" alt="logo">
                                        <img class="logo-dark logo-img" src="{{ asset('logo.png') }}"
                                            srcset="{{ asset('logo.png') }}" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                        data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="{{ route('dashboard.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">Components</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/dashboard/pages') }}" class="nk-menu-link"><span
                                                        class="nk-menu-text">Pages</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="{{ url('/dashboard/system') }}" class="nk-menu-link"><span
                                                        class="nk-menu-text">System</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="{{ route('dashboard.contact.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Contact</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="{{ route('dashboard.jobsapplication.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Jobs application</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="{{ route('dashboard.dealerrequest.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Dealer request</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">Products</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ route('dashboard.products.index') }}" class="nk-menu-link"><span
                                                        class="nk-menu-text">Products</span></a>
                                            </li>
                                            {{-- <li class="nk-menu-item">
                                                <a href="{{ url('/dashboard/system') }}" class="nk-menu-link"><span
                                                        class="nk-menu-text">Categories</span></a>
                                            </li> --}}
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                    {{-- <li class="nk-menu-item has-sub">
                                        <a href="{{ route('dashboard.products.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Products</span>
                                        </a>
                                    </li><!-- .nk-menu-item --> --}}
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status">{{ Auth::user()->role }}</div>
                                                <div class="user-name dropdown-indicator">
                                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span
                                                        class="lead-text">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
                                                    <span class="sub-text">{{ Auth::user()->phone }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{ url('/dashboard/profile') }}"><em
                                                            class="icon ni ni-user-alt"></em><span>View
                                                            Profile</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li><a
                                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                                <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="quick-icon">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                        <ul class="language-list">
                                            @foreach (Config::get('languages') as $lang => $language)
                                                @if ($lang != App::getLocale())
                                                    <li>
                                                        <a href="{{ route('lang.switch', $lang) }}"
                                                            class="language-item">
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </li><!-- .dropdown -->
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
