
<a 
    class="h-full px-3 py-2 text-white bg-{{$color ?? config('ui-builder.system.color')}}-700 rounded hover:bg-{{$color ?? config('ui-builder.system.color')}}-900 shadow-md hover:shadow-none align-middle"
    type="button" 
    dusk="edit-button" 
    href="{{ $url }}"
>
    {{$name}}
</a>