{{--
    script[]script
    style[modules/cta-with-img.scss]style
    Title: Cta With Img
    Description: Cta Section with Image Description
    Category: outside
    Icon: admin-tools
    Keywords: Image, CTA
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
    EnqueueAssetsCSS:styles/cta-wtih-img.css
    EnqueueAssetsJS:
--}}
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/cta-with-img.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($imgUrl || $title || $content || $content_small || $eyebrow || $buttonUrl)
    @php
        $blockId = $block['id'];
    @endphp
    <section class="cta-with-img section-gutter-l" id="{{ $blockId }}">
        <div class="container">
            <div class="row row-gap-10">
                <div class="col-xl-6  d-flex flex-column row-gap-10 order-xl-1 order-2 my-auto">
                    @if ($eyebrow)
                        <div class="eyebrow mb-0">
                            {{ $eyebrow }}
                        </div>
                    @endif
                    @if ($title)
                        <h2 class="h3 mb-0">
                            {{ $title }}
                        </h2>
                    @endif
                    @if ($content)
                        <div class="body-l ">
                            {!! $content  !!}
                        </div>
                    @endif
                    @if ($content_small)
                        <div class="body">
                            {!! $content_small  !!}
                        </div>
                    @endif

                    @if ($buttonUrl)
                        <div class="">
                            @include('components.link-component', [
                                'title' => $buttonTitle,
                                'url' => $buttonUrl,
                                'target' => $buttonTarget,
                                'showIcon' => $showIcon,
                                'a_class' => 'btn-sky',
                            ])
                        </div>
                    @endif
                </div>
                @if ($imgUrl)
                    <div class="col-xl-5  my-auto order-1">
                        <div class="cta-with-img__img">
                            <img src="{{ $imgUrl }}" loading="lazy" decoding="async"
                                @if ($imgAlt) alt="{{ $imgAlt }}" @endif>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
