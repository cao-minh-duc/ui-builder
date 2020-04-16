@component('ui-builder::datatable.body-cells.default',[
    'class' => $class ?? ''
])
    <a href="{{ $href ?? '' }}" class="font-bold text-default-700 {{$linkClass ?? ''}}"> {{$slot}}</a>
@endcomponent