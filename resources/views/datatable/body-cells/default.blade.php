<td 
    class="px-3 py-2 border border-default-200 {{$class ?? ''}}" 
    @isset($colspan)
        colspan="{{ $colspan }}"
    @endisset
>
    {{$slot ?? ''}}
</td>