{{--
    script[about-us.js]script
    style[modules/about-us.scss]style
    Title: About Us
    Description: about-us Description]
    Category: outside
    Icon: admin-tools
    Keywords: About
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
    EnqueueAssetsCSS:styles/about-us.css
    EnqueueAssetsJS:
--}}
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/about-us.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($eyebrow || $title || $videoEyebrow || $buttonUrl || $videoUrl)
    @php
        $blockId = $block['id'];
    @endphp
    <section class="about-us section-gutter-l" id="{{ $blockId }}">
        <div class="container">
            <div class="row row-gap-10">
                @if ($eyebrow || $title || $buttonUrl)
                    <div class="col-md-6 d-flex justify-content-center row-gap-10 flex-column ">
                        @if ($eyebrow)
                            <span class="eyebrow d-block "> {{ $eyebrow }}</span>
                        @endif
                        @if ($title)
                            <h2 class="h3 mb-0">
                                {{ $title }}
                            </h2>
                        @endif
                        @if ($buttonUrl)
                            <div class="">
                                @include('components.link-component', [
                                    'title' => $buttonTitle,
                                    'url' => $buttonUrl,
                                    'target' => $buttonTarget,
                                    'showIcon' => $showButtonIcon,
                                    'a_class' => 'btn-sky',
                                ])
                            </div>
                        @endif

                    </div>
                @endif
                @if ($videoEyebrow || $videoUrl)
                    <div class="col-xl-5 col-md-6  offset-xl-1">
                        <div class="m-auto p-6 bg-mint">
                            @if ($videoEyebrow)
                                <h6 class="eyebrow mb-4"> {{ $videoEyebrow }}</h6>
                            @endif
                            @if ($videoUrl)
                                <div class=" about-us__video__container">
                                    <button class="about-us__video__icon
                            js-play-video"><i
                                            class="icon-play"> </i></button>
                                    @if ($isVimeoLink)
                                        <iframe src="{{ $videoUrl }}" loading="lazy" frameborder="0"
                                            allow="autoplay; fullscreen" class="about-us__video__content"
                                            allowfullscreen>
                                        </iframe>
                                    @else
                                        <video class="about-us__video__content"
                                            @if ($videoPoster) poster="{{ $videoPoster }}" @endif>
                                            <source src="{{ $videoUrl }}" type=”video/mp4 />
                                        </video>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
