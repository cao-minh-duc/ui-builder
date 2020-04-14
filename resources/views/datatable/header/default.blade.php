<thead>
    <tr>
        @isset($cells)
            @foreach($cells as $cell)
                @include($cell['view'] ?? 'ui-builder::datatable.header-cells.default',[
                    'class' => $cell['class'] ?? '',
                    'slot' => $cell['slot'] ?? '',
                ])
            @endforeach
        @else
            {{$slot}}
        @endif
    <tr>
</thead>