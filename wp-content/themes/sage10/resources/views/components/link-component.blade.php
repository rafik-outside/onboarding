<a href="{!! $url ? $url : '#' !!}" @isset($a_class)class="{{ $a_class }}" @endisset
    @if ($target) target="{{ $target }}" @endif
    @isset($title) title="{!! $title !!}" @endisset>
    @isset($title)
        {!! $title !!}
    @endisset
    @if ($showIcon)
        <i class="icon-right font-size-4">
        </i>
    @endif
</a>
