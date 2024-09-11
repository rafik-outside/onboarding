{{--
    script[banner.js]script
    style[modules/leadspace.scss]style
    Title: Leadspace
    Description: Leadspace Description]
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS:styles/leadspace.css
    EnqueueAssetsJS:
--}}
<!-- leadspace html goes here -->
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
        $imgUrl1 = \Roots\asset('images/leadspace/leadspace-2.webp')->uri();
        $imgUrl2 = \Roots\asset('images/leadspace/leadspace-1.webp')->uri();
        $imgUrl3 = \Roots\asset('images/leadspace/leadspace-3.webp')->uri();

    @endphp
    <section class="leadspace bg-blush  section-gutter" id="{{ $blockId }}">
        <div class="container">
            <div class="row leadspace__row-gap">
                <div class="col-md-5 pe-xl-5 ls-col-5">
                    <div class="pe-xl-6 h-100">
                        <img src="{{ $imgUrl1 }}" class="ls-col-5__img" alt="">
                    </div>
                </div>
                <div class="col-md-7 ls-col-7  d-md-block d-none">
                    <div class="h-100">
                        <img src="{{ $imgUrl2 }}" class="ls-col-7__img" alt="">
                    </div>
                </div>
                <div class="col-xl-8  pe-xl-5">
                    <div class="p-xl-20 p-md-10 p-6  border-top-8 bg-white">
                        <h1 class="h2"> Look deep into nature, and then you will understand everything better. </h1>
                        <div class="mt-6  body-xl">
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece
                                of
                                classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="#" class="btn-outline-space">Contact Us <i class="icon-right font-size-4">
                                </i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-xl-block d-none  ps-xl-5">
                    <div class="pe-6">
                        <img src="{{ $imgUrl3 }}" class="ar-1x1" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
