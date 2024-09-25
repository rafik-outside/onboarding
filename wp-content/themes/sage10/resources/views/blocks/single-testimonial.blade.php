{{--
    script[videoToggle.js]script
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
@elseif($imgUrl || $title || $content || $name || $designation)
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
                        <div class="body-xl text-center mb-xl-14 mb-md-11 mb-6 ">
                            {!! $subtitle !!}
                        </div>
                    @endif
                    @if ($imgUrl)
                        <div class="single-testimonial__img-container  mx-auto  mb-xl-12 mb-md-11 mb-8">
                            <img src="{{ $imgUrl }}" class="w-100 object-fit-cover" alt="{{ $imgALt }}"
                                loading="lazy" decoding="async">
                        </div>
                    @endif
                    @if ($name)
                        <div class="h4 text-teal text-center mb-xl-5 mb-md-7 mb-4">
                            {{ $name }} <span class="d-md-inline d-block">{{ $designation }}</span>
                        </div>
                    @endif
                    @if ($linkedinLink || $githubLink || $twitterLink || $fbLink)
                        <div
                            class="single-testimonial__social d-flex column-gap-3 justify-content-center mb-xl-5 mb-md-7 mb-6 flex-wrap">
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
                                <a href="{{ $fbLink }}" title="Facebook" class="single-testimonial__social__link "
                                    target="_blank">
                                    <i class="icon-facebook text-sky">
                                    </i>
                                </a>
                            @endif
                        </div>
                    @endif
                    @if ($content)
                        <div class="text-center body single-testimonial__content mx-auto ">
                            <q>
                                {{ $content }}
                            </q>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
