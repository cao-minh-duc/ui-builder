@component('ui-builder::inputs.layouts.default',[
    'code' => $code,
    'name' => $name,
    'isInline' => $isInline ?? TRUE,
    'errors' => $errors
])
    <!-- Input -->
    <input 
        id="{{$id ?? $code}}" 
        name="{{$code}}" 
        type="datetime-local"
        @if(isset($value) && is_string($value))
            value="{{$value}}"
        @endif 

        @if(isset($value) && $value instanceof \Carbon\Carbon)
            value="{{$value->format('Y-m-d\TH:i')}}"
        @endif 

        @if($required ?? true)
            required
        @endif
        @if($disabled ?? false)
            disabled
        @endif
        @if($readonly ?? false)
            readonly
        @endif
        class="p-2 border rounded w-full border border-default-200 shadow focus:shadow-none hover:shadow-none
        @error($code)
            border-red-500
        @enderror
        @if($disabled ?? false || ($readonly ?? false))
            bg-default-100 shadow-none cursor-not-allowed
        @endif
    ">
    <!-- End Input -->
@endcomponent
