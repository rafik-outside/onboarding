{{--
    script[team.js]script
    style[modules/team.scss]style
    Title: Team
    Description: Team Description]
    Category: outside
    Icon: admin-tools
    Keywords: team
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
    EnqueueAssetsCSS:styles/team.css
    EnqueueAssetsJS:
--}}
<!-- team html goes here -->
@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/team.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@elseif($eyebrow || $teams)
    @php
        $blockId = $block['id'];
        $imgUrl = \Roots\asset('images/preview/team.webp')->uri();

    @endphp
    <section class="team section-gutter-l bg-blush" id="{{ $blockId }}">
        <div class="container">
            <div class="team-swiper px-xl-10">
                @if ($eyebrow)
                    <div class="eyebrow mb-6 mb-md-10">
                        {{ $eyebrow }}
                    </div>
                @endif
                @if ($teams)
                    <div class="team-swiper-container swiper">
                        <div class="swiper-wrapper">
                            @foreach ($teams as $team)
                                <div class="swiper-slide ">
                                    @include('blocks.cards.card-team', [
                                        'card' => $team,
                                    ])
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination mt-md-10 mt-6">
                            <div class="team-swiper-pagination  "></div>
                            <div class="team-swiper-button-prev pagination__prev bg-white"><i
                                    class="text-space icon-left "></i></div>
                            <div class="team-swiper-button-next pagination__next bg-white"><i
                                    class="text-space icon-right"></i></div>
                        </div>
                    </div>
                @endif
            </div>
    </section>
@endif
