<footer class="footer bg-sky py-10 py-md-20 bg-sky">
    <div class="container">
        <div class="row row-gap-10 row-gap-xl-20 js-accordion">
            @if ($footerLogo)
                <div class="col-12">
                    <a href="{{ home_url() }}" title="{{ $footerLogo['alt'] }}">
                        <img class="header__brand" src="{{ $footerLogo['url'] }}" alt="{{ $footerLogo['alt'] }}">
                    </a>
                </div>
            @endif
            @if ($footerMenus && $hasFooterMenus)
                {!! $footerMenus !!}
            @endif
            @if ($showNewsletter)
                <div class="col-md-12 col-xl-6 mt-auto">
                    <form action="" class="footer__form">
                        @if ($newsletterTitle)
                            <div class="border-white mb-6 mb-md-4">
                                <i class="text-white text-blush">{!! $newsletterTitle !!}</i>
                            </div>
                        @endif
                        <div class="d-flex column-gap-4 row-gap-6 flex-column flex-md-row align-items-bottom">
                            <input type="email" placeholder="Email Address"
                                class="form-control form-control--white form-control--font-footer">
                            <div class="footer__button">
                                <button class="btn-outline-light w-auto" type="submit ">Submit <i
                                        class="icon-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
            @if ($copyrightText || $copyrightTextLink)
                <div class="footer__copyright text-white col-12">
                    {{ $copyrightText }}
                    @if ($copyrightTextLink)
                        @include('components.link-component', [
                            'title'     => $copyrightTextLink['title'],
                            'url'       => $copyrightTextLink['url'],
                            'target'    => $copyrightTextLink['target'],
                            'showIcon'  => false,
                            'a_class'   => 'footer__copyright-link',
                        ])  
                    @endif
                </div>
            @endif
        </div>
    </div>
</footer>
