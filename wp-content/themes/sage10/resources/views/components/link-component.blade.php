<a href="{{ $cta['url'] }}" class="{{ $a_class }}"
    @empty($cta['target']) target="{{ $cta['target'] }}" @endempty title="{{ $cta['title'] }}">
    {{ $cta['title'] }}
</a>