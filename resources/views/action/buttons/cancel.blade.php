
<button 
    class="h-full px-3 text-{{ config('ui-builder.system.color','indigo') }}-700 border border-{{ config('ui-builder.system.color','indigo') }}-500 rounded shadow-md bg-{{ config('ui-builder.system.color','indigo') }}-0 border-indi hover:shadow-none hover:bg-{{ config('ui-builder.system.color','indigo') }}-100"
    type="button" 
    dusk="cancel-button" 
    href="{{ $url }}"
>
    {{$name}}
</button>