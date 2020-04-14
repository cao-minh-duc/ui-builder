<tr>
    @isset($cells)
        @foreach($cells as $cell)
            @include($cell['view'] ?? $defaultView ?? 'ui-builder::datatable.body-cells.default', (array)$cell)
        @endforeach
    @else
        {{$slot}}
    @endif
</tr>