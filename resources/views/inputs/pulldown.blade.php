@component('ui-builder::inputs.layouts.default',[
    'code' => $code,
    'name' => $name,
    'isInline' => $isInline ?? TRUE,
    'errors' => $errors
])
    <!-- Input -->

    <select 
        id="{{$id ?? $code}}" 
        name="{{$code}}" 
        type="text"
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
        class="form-select p-2 border rounded w-full border border-default-200 shadow focus:shadow-none hover:shadow-none
        @error($code)
            border-red-500
        @enderror
        @if($disabled ?? false || ($readonly ?? false))
            bg-default-100 shadow-none cursor-not-allowed
        @endif
    ">
        @php
            $valueField = $valueField ?? 'id';
            $nameField = $nameField ?? 'name'
        @endphp
        @foreach($datalist as $item)
            <option 
                value="{{ $item->{$valueField} }}"
                @if(
                    ($value ?? NULL) == $item->{$valueField}
                )
                    selected
                @endif
                
            >{{ $item->{$nameField} }}</option>
        @endforeach
    </select>
    <!-- End Input -->
@endcomponent
