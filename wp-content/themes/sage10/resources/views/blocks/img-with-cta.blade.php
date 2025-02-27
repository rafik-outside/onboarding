{{--
    script[]script
    style[modules/img-with-cta.scss]style
    Title: Image With Cta
    Description: img-wtih-cta Description]
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
    EnqueueAssetsCSS:styles/img-wtih-cta.css
    EnqueueAssetsJS:
--}}
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/img-with-cta.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($imgUrl || $title || $content || $eyebrow || $buttonUrl)
    @php
        $blockId = $block['id'];
    @endphp
    <section class="img-with-cta section-gutter-l bg-mint " id="{{ $blockId }}">
        <div class="container">
            <div class="row row-gap-12">
                @if ($imgUrl)
                    <div class="col-md-6 ">
                        <div class="pe-2 pe-md-0">
                            <img src="{{ $imgUrl }}" class="shadow img-with-cta__image w-100 object-fit-cover"
                                alt="{{ $imgAlt }}">

                        </div>
                    </div>
                @endif
                @if ($title || $content || $eyebrow || $buttonUrl)
                @endif

                <div class="col-md-6 d-flex justify-content-center row-gap-6 flex-column">
                    @if ($eyebrow)
                        <span class="eyebrow">
                            {{ $eyebrow }}
                        </span>
                    @endif
                    @if ($title)
                        <h2 class="h4 mb-0">
                            {{ $title }}
                        </h2>
                    @endif
                    @if ($date)
                    @endif
                    @if ($content || date)
                        <div class="body">
                            <span class=" text-sky d-block mb-6 mb-md-0 mb-xl-4"> {{ $date }}</span>
                            {!! $content !!}
                        </div>
                    @endif
                    @if ($buttonUrl)
                        <div class="">
                            @include('components.link-component', [
                                'title'     => $buttonTitle,
                                'url'       => $buttonUrl,
                                'target'    => $buttonTarget,
                                'showIcon'  => $showIcon,
                                'a_class'   => 'btn-outline-space',
                            ])
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </section>
@endif
