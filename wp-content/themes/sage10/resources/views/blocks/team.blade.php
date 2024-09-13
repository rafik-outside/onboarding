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
                                    @include('blocks.cards.team', [
                                        'card' => $team,
                                    ])
                                </div>
                            @endforeach
                           
                            <div class="swiper-slide">
                                <div class="row border-top-8 ">
                                    <div class="col-md-6 pe-xl-9 pe-md-0 ">
                                        <div class="team-swiper-img">
                                            <img src="{{ $imgUrl }}" decoding="async" loading="lazy"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 bg-white ps-xl-9 ps-md-0 d-flex ">
                                        <div class="team-swiper-box ">
                                            <h5 class="h5 team-swiper-title">Sally Albana - Site Engineer</h5>
                                            <div class="team-swiper-content body-xl">
                                                “It is not so much for its beauty that the forest makes a claim upon
                                                men’s
                                                hearts, as for that subtle something, that quality of air that emanation
                                                from old trees, that so wonderfully changes and renews a weary spirit.”
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row border-top-8 ">
                                    <div class="col-md-6 pe-xl-9 pe-md-0 ">
                                        <div class="team-swiper-img">
                                            <img decoding="async" loading="lazy" src="{{ $imgUrl }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 bg-white ps-xl-9 ps-md-0 d-flex ">
                                        <div class="team-swiper-box ">
                                            <h5 class="h5 team-swiper-title">Sally Albana - Site Engineer</h5>
                                            <div class="team-swiper-content body-xl">
                                                “It is not so much for its beauty that the forest makes a claim upon
                                                men’s
                                                hearts, as for that subtle something, that quality of air that emanation
                                                from old trees, that so wonderfully changes and renews a weary spirit.”
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
