<a href="{{ $url }}" class="{{ $a_class }}"
    @empty($target) target="{{ $target }}" @endempty title="{{ $title }}">
    {{ $title }}
    @if($showIcon)
        <i class="icon-right font-size-4">
        </i>
    @endif
</a>
