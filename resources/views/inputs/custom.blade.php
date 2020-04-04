@component('ui-builder.layouts.default',[
    'code' => $code,
    'name' => $name,
    'isInline' => $isInline
])
    {{$slot}}
@endcomponent