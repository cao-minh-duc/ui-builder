<tr class="hidden lg:hidden border border-{{ config('ui-builder.system.color') }}-200">
    <td class="px-3 py-2" colspan="{{$colspan ?? 3}}">
        <ul>
            @isset($cells)
                @foreach($cells as $cell)
                    @include($cell['view'] ?? $defaultView ?? 'ui-builder::datatable.body-cells.default', (array)$cell)
                @endforeach
            @else
                {{$slot}}
            @endif
        </ul>
    </td>
</tr>