<div class="row bg-white ">
    @if ($card['imgUrl'])
        <div class="col-md-6 pe-xl-9 pe-md-0 border-top-8 ">
            <div class="team-swiper-img">
                <img src="{{ $card['imgUrl'] }}" decoding="async" loading="lazy"
                    @if ( $card['imgAlt'] ) alt="{{ $card['imgAlt'] }}" @endif>
            </div>
        </div>
    @endif
    @if ($card['title'] || $card['content'])
        <div class="col-md-6  ps-xl-9 ps-md-0 d-flex border-top-8 ">
            <div class="team-swiper-box ">
                <h5 class="h5 team-swiper-title">{{ $card['title'] }}</h5>
                <div class="team-swiper-content body-xl">
                    {!! $card['content'] !!}
                </div>
            </div>
        </div>
    @endif
</div>
