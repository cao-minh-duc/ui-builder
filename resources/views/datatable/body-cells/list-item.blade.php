<li class="{{$class}} py-2 flex">
    <div class="w-1/3 font-bold align-top">
        {{ $label }}:
    </div>
    <div class="align-top w-2/3 {{ $slotClass ?? '' }}">{!! $slot !!}</div>
</li>