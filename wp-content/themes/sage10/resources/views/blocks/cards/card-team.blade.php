<div class="row bg-white ">
    @if ($card['imgUrl'])
        <div class="col-md-6  border-top-8 pe-xl-5 pe-md-0 pe-5">
            <div class="team-swiper-img pe-xl-9 pe-md-0">
                <img src="{{ $card['imgUrl'] }}" decoding="async" loading="lazy"
                    @if ( $card['imgAlt'] ) alt="{{ $card['imgAlt'] }}" @endif>
            </div>
        </div>
    @endif
    @if ($card['title'] || $card['content'])
        <div class="col-md-6   d-flex border-top-8 border-xs-0">
            <div class="team-swiper-box  ps-xl-4 ps-xl-0 ps-md-5">
                <h3 class="h3 team-swiper-title mb-xl-8">{{ $card['title'] }}</h3>
                <div class="team-swiper-content body-xl">
                    {!! $card['content'] !!}
                </div>
            </div>
        </div>
    @endif
</div>
