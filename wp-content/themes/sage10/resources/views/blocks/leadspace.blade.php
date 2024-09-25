{{--
    script[]script
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
@elseif($img1 || $img2 || $img3 || $card['title'] || $card['content'] || $card['buttonUrl'])
    @php
        $blockId = $block['id'];
    @endphp
    <section class="leadspace @if ($backgroundVariation) {{ $backgroundVariation }} @endif  section-gutter"
        id="{{ $blockId }}">
        <div class="container">
            <div class="row">
                @if ($img1)
                    <div class="col-md-5 pe-xl-5 ls-col-5">
                        <div class="pe-xl-6 h-100">
                            <img src="{{ $img1['url'] }}" class="leadspace__img-1 w-100 object-fit-cover"
                                alt="{{ $img1['alt'] }}">
                        </div>
                    </div>
                @endif
                @if ($img2)
                    <div class="col-md-7 ls-col-7  d-md-block d-none">
                        <div class="h-100">
                            <img src="{{ $img2['url'] }}" class="leadspace__img-2 w-100 object-fit-cover"
                                alt="{{ $img2['alt'] }}">
                        </div>
                    </div>
                @endif
                @if ($card)
                    <div class="col-xl-8  pe-xl-5 mt-xl-15 mt-md-10 mt-6">
                        <div class="p-xl-20 p-md-10 py-10 px-6  border-top-8 bg-white">
                            @if ($card['title'])
                                @include('components.heading', [
                                    'title' => $card['title'],
                                    'tag' => $titleTag,
                                    'heading_class' => 'h2 mb-4',
                                ])
                            @endif
                            @if ($card['content'])
                                <div class="mb-10  @if ($bodyTextClass) {{ $bodyTextClass }} @endif">
                                    {!! $card['content'] !!}
                                </div>
                            @endif
                            @if ($card['buttonUrl'] || $card['buttonTitle'])
                                <div>
                                    @include('components.link-component', [
                                        'title' => $card['buttonTitle'],
                                        'url' => $card['buttonUrl'],
                                        'target' => $card['buttonTarget'],
                                        'showIcon' => $card['showButtonIcon'],
                                        'a_class' => 'btn-outline-space',
                                    ])
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
                @if ($img3)
                    <div class="col-xl-4 d-xl-block d-none  ps-xl-5 mt-xl-15 mt-md-10 mt-6">
                        <div class="pe-6">
                            <img src="{{ $img3['url'] }}" class="leadspace__img-1 w-100 object-fit-cover"
                                alt="{{ $img3['alt']"">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
