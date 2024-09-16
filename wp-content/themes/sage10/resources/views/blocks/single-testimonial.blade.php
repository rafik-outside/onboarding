{{--
    script[]script
    style[modules/single-testimonial.scss]style
    Title: Single Testimonial
    Description: Single Testimonial Section]
    Category: outside
    Icon: admin-tools
    Keywords: Testimonial
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
    EnqueueAssetsCSS:styles/single-testimonial.css
    EnqueueAssetsJS:
--}}
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/single-testimonial.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($imgUrl || $title || $content || $name || $designation )
    @php
        $blockId = $block['id'];

    @endphp
    <section class="single-testimonial " id="{{ $blockId }}">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-8 col-md-10 col-12">
                    @if ($title)
                        <h2 class="h2 text-center mb-xl-6 mb-md-8 mb-4">
                            {{ $title }}
                        </h2>
                    @endif
                    @if ($subtitle)
                        <div class="body-xl text-center ">
                            {{ $subtitle }}
                        </div>
                    @endif
                    @if ($imgUrl)
                        <div class="single-testimonial__img  mx-auto mt-xl-14 mt-6">
                            <img src="{{ $imgUrl }}" @if($imgALt) alt="{{ $imgALt }}" @endif loading="lazy" decoding="async">
                        </div>
                    @endif
                    @if ($name)
                        <div class="h4 text-teal text-center mt-xl-12 mt-md-11 mt-8">
                            {{ $name }} <span class="d-md-inline d-block">{{ $designation }}</span>
                        </div>
                    @endif
                    @if ($linkedinLink || $githubLink || $twitterLink || $fbLink)
                        <div class="single-testimonial__social d-flex column-gap-3 justify-content-center">
                            @if ($linkedinLink)
                                <a href="{{ $linkedinLink }}" title="Linked In" class="single-testimonial__social__link"
                                    target="_blank">
                                    <i class="icon-linkedin text-sky">
                                    </i>
                                </a>
                            @endif
                            @if ($githubLink)
                                <a href="{{ $githubLink }}" title="Github" class="single-testimonial__social__link"
                                    target="_blank">
                                    <i class="icon-github text-sky">
                                    </i>
                                </a>
                            @endif
                            @if ($twitterLink)
                                <a href="{{ $twitterLink }}" title="Twitter" class="single-testimonial__social__link"
                                    target="_blank">
                                    <i class="icon-twitter text-sky">
                                    </i>
                                </a>
                            @endif
                            @if ($fbLink)
                                <a href="{{ $fbLink }}" title="Facebook" class="single-testimonial__social__link"
                                    target="_blank">
                                    <i class="icon-facebook text-sky">
                                    </i>
                                </a>
                            @endif
                        </div>
                    @endif
                    @if ($content)
                        <div class="text-center body single-testimonial__content mx-auto mt-xl-5 mt-md-7 mt-6">
                            {!! $content !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
