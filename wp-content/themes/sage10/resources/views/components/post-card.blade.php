<div class="post-card">
    @if ($imgUrl)
        <a href="{{ $postUrl }}" title="{{ $title }}">
            <div class="post-card__image-box">
                <img src="{{ $imgUrl }}" class="w-100" @if ($imgAlt) alt="{{ $imgAlt }}" @endif
                    loading="lazy" decoding="async">
            </div>
        </a>
    @endif
    <div class="post-card__content-box py-6 px-6">
        @if ($date)
            <div class="eybrow h6 mb-4">
                {{ $date }}
            </div>
        @endif
        @if ($title)
            <a href="{{ $postUrl }}" title="{{ $title }}">
                <h3 class="h4">{{ $title }}</h3>
            </a>
        @endif

    </div>
</div>
