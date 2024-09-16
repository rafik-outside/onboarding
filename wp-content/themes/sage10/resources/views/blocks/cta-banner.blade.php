{{--
    script[]script
    style[]style
    Title: Cta Banner
    Description: Cta Banner
    Category: outside
    Icon: admin-tools
    Keywords: Banner , CTA
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
    EnqueueAssetsCSS:
    EnqueueAssetsJS:
--}}

@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/cta-banner.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($title || $content || $buttonUrl)
    @php
        $blockId = $block['id'];
    @endphp
    <section class="cta-with-img py-10 py-md-20 bg-blush " id="{{ $blockId }}">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    @if ($title)
                        <h2 class="h3 mb-0">
                            {{ $title }}
                        </h2>
                    @endif
                    @if ($content)
                        <div class="body-xl  mt-2 mt-xl-4 mb-0">
                            {!!  $content  !!}
                        </div>
                    @endif
                    @if ($buttonUrl)
                        <div class="mt-6 mt-xl-10 mb-0">
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

            </div>
        </div>
    </section>
@endif
