@component('ui-builder::datatable.rows.default')
    @include('ui-builder::datatable.body-cells.default',[
        'class' => 'text-center',
        'colspan' => $colspan,
        'slot' => $slot
    ])
@endcomponent