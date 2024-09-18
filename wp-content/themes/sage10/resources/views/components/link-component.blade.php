<a href="{{ $url }}" class="{{ $a_class }}"
    @if($target) target="{{ $target }}" @endif title="{{ $title }}">
    {{ $title }}
    @if($showIcon)
        <i class="icon-right font-size-4">
        </i>
    @endif
</a>
