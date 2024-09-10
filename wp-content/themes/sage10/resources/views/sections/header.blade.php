<header class="header px-10 py-6  top-0" id="header">
    <div class="align-items-center justify-content-between d-flex">
        @if ($headerLogo)
            <div>
                <div class="d-inline d-xl-none me-9 header__nav__toggle text-white ">
                    <button class="d-inline header__burger header-toggle-js" id="head-burger-js" aria-expanded="false"
                        aria-label="Toogle Menu" >
                        <span class="header__burger__icon">
                        </span>
                    </button>
                </div>
                {{-- <i class="icon-bars me-9 d-xl-none header-toggle-js header__open-menu-button"></i> --}}
                <a href="{{ home_url('/') }}" title="{{ $headerLogo['alt'] }}">
                    <img class="header__brand" src="{{ $headerLogo['url'] }}" alt="{{ $headerLogo['alt'] }}">
                </a>
            </div>
        @endif
        @if ($cta)
            @include('components.link-component', [
                'cta' => $cta,
                'a_class' => 'btn-outline-space d-xl-none d-md-block d-none btn-outline-space--size-medium',
            ])
        @endif

        {{-- @if ($hasPrimaryMenu && $primaryMenus)
            <nav class="header__nav  d-xl-block d-none " aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! $primaryMenus !!}
            </nav>
            <nav class="header__nav header__nav__mobile  d-xl-none "
                aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! $primaryMenus !!}
            </nav>
        @endif --}}
        <nav class="header__nav  d-xl-block d-none " aria-label="primary menu">
            <ul id="menu-primary-menu" class="d-xl-flex header__nav-menu">
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">About</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Blog</a></li>
                <li id="menu-item-16" class=" header__nav-item "> <a href="http://localhost:10009"
                        class="header__nav-link ">Team</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Career</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Contact</a></li>
            </ul>
        </nav>
        <nav class="header__nav header__nav__mobile  d-xl-none " aria-label="primary menu">
            <ul id="menu-primary-menu" class="d-xl-flex header__nav-menu">
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">About</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Blog</a></li>
                <li id="menu-item-16" class=" header__nav-item "> <a href="http://localhost:10009"
                        class="header__nav-link ">Team</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Career</a></li>
                <li id="menu-item-16" class=" header__nav-item "><a href="http://localhost:10009"
                        class="header__nav-link ">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
