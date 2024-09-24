<header class="header px-xl-10  py-md-6 px-6 py-4 p-xl-8  top-0" id="header">
    <div class="align-items-center justify-content-between d-flex">
        <div>
            <div class="d-inline d-xl-none me-9 header__nav__toggle text-white header-toggle-js">
                <button class="d-inline header__burger" id="head-burger-js" aria-expanded="false"
                    aria-label="Toogle Menu">
                    <span class="header__burger__icon">
                    </span>
                </button>
            </div>
            @if ($headerLogo || $headerLogoLight)
                <a href="{{ home_url('/') }}" title="{{ $headerLogo['alt'] }}">
                    <img class="header__brand logo--dark" src="{{ $headerLogo['url'] }}" alt="{{ $headerLogo['alt'] }}">
                    <img class="header__brand logo--light" src="{{ $headerLogoLight['url'] }}"
                        alt="{{ $headerLogoLight['alt'] }}">
                </a>
            @endif
        </div>
        @if ($cta)
            @include('components.link-component', [
                'title'     => $cta['title'] ?? false,
                'url'       => $cta['url'] ?? false,
                'target'    => $cta['target'] ?? false,
                'showIcon'  => false,
                'a_class'   => 'btn-outline-space d-xl-none d-md-block d-none btn-outline-space--size-medium',
            ])
        @endif
        @if ($hasPrimaryMenu && $primaryMenus)
            <nav class="header__nav d-flex flex-xl-row" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! $primaryMenus !!}
            </nav>
        @endif
    </div>
</header>
