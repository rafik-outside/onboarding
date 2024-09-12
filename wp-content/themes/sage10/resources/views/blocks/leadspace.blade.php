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
    @endphp
    <section class="leadspace @if ($backgroundVariation) {{ $backgroundVariation }} @endif  section-gutter"
        id="{{ $blockId }}">
        <div class="container">
            <div class="row leadspace__row-gap">
                @if ($img1)
                    <div class="col-md-5 pe-xl-5 ls-col-5">
                        <div class="pe-xl-6 h-100">

                            <img src="{{ $img1['url'] }}" class="ls-col-5__img"
                                @empty(!$img1['alt'])
                                alt="{{ $img1['alt'] }}"
                            @endempty>
                        </div>
                    </div>
                @endif
                @if ($img2)
                    <div class="col-md-7 ls-col-7  d-md-block d-none">
                        <div class="h-100">
                            <img src="{{ $img2['url'] }}" class="ls-col-7__img"
                                @empty(!$img2['alt'])
                            alt="{{ $img2['alt'] }}"
                        @endempty>
                        </div>
                    </div>
                @endif
                @if ($card)
                    <div class="col-xl-8  pe-xl-5">
                        <div class="p-xl-20 p-md-10 p-6  border-top-8 bg-white">
                            @if ($card['title'])
                                @include('components.heading', [
                                    'title' => $card['title'],
                                    'tag' => $titleTag,
                                    'heading_class' => 'h2',
                                ])
                            @endif
                            </h1>
                            @if ($card['content'])
                                <div class="mt-6 @if ($bodyTextClass) {{ $bodyTextClass }} @endif">
                                    {!! $card['content'] !!}
                                </div>
                            @endif
                            @if ($card['buttonUrl'] || $card['buttonTitle'])
                                <div class="mt-10">
                                    <a href="{{ $card['buttonUrl'] }}"
                                        @if ($card['buttonTarget']) target="{{ $card['buttonTarget  '] }}" @endif
                                        class="btn-outline-space">{{ $card['buttonTitle'] }}
                                        @if ($card['showButtonIcon'])
                                            <i class="icon-right font-size-4">
                                            </i>
                                        @endif
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
                @if ($img3)
                    <div class="col-xl-4 d-xl-block d-none  ps-xl-5">
                        <div class="pe-6">
                            <img src="{{ $img3['url'] }}" class="ar-1x1"
                                @empty(!$img3['alt'])
                            alt="{{ $img3['alt'] }}"
                        @endempty>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif