<div class="row bg-white ">
    @if ($card['imgUrl'])
        <div class="col-md-6  border-top-8 pe-xl-5 pe-md-0 pe-5">
            <div class=" pe-xl-9 pe-md-0">
                <img src="{{ $card['imgUrl'] }}" decoding="async" class="team-swiper-img object-fit-cover w-100"
                    loading="lazy" @if ($card['imgAlt']) alt="{{ $card['imgAlt'] }}" @endif>
            </div>
        </div>
    @endif
    @if ($card['title'] || $card['content'])
        <div class="col-md-6   d-flex border-top-8 border-xs-0">
            <div class="team-swiper-box my-auto   ps-xl-4 ps-xl-0 ps-md-5 p-md-10  p-6">
                <h3 class="h3 team-swiper-title  mb-10 mb-xl-8">{{ $card['title'] }}</h3>
                <div class="team-swiper-content body-xl">
                    <q>
                        {{ $card['content'] }}
                    </q>
                </div>
            </div>
        </div>
    @endif
</div>
