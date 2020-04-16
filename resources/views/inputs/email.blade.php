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
        type="email" 
        autocomplete="email" 
        @isset($value)
            value="{{$value}}"
        @endisset 
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
@endcomponent