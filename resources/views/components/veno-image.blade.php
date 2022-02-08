<div class="mb-2 d-inline-block">
    <a
        class="venobox"
        @isset($gall)
        data-gall="{{ $gall }}}"
        @endisset
        href="{{ $big ? $big : $small }}">
        <img src="{{ $small }}" style="height: 100px" {{ $attributes->merge(['class' => 'rounded']) }}/>
    </a>
</div>
