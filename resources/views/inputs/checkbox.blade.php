@component('ui-builder::inputs.layouts.default',[
    'code' => $code,
    'name' => $name,
    'isInline' => $isInline ?? TRUE,
    'errors' => $errors
])
    @component('ui-builder::inputs.labels.slot')
        <input 
            id="{{$id ?? $code}}" 
            name="{{$code}}" 
            type="checkbox"
            value="{{$value}}"
            
            @if($disabled ?? false)
                disabled
            @endif
            @if($readonly ?? false)
                readonly
            @endif
            @if($checked ?? true)
                checked
            @endif
            class="mr-2 border rounded border border-default-200 shadow focus:shadow-none hover:shadow-none text-default-700 form-checkbox
            @error($code)
                border-red-500
            @enderror
            @if($disabled ?? false || ($readonly ?? false))
                bg-default-100 shadow-none cursor-not-allowed
            @endif
        ">{{ $placeholder ?? NULL }}</label>
    @endcomponent
    
@endcomponent