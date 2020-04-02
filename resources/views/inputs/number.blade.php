<!-- Input Block -->
<div class="mx-2 my-4 
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    <label for="{{$code}}" class="block my-3 font-bold lg:w-1/3">
        {{$name}}
    </label>
    <!-- End Input Label -->
    
    <div class="w-full">
        <!-- Input -->
        <input 
            id="{{$id ?? $code}}" 
            name="{{$code}}" 
            type="number" 
            autocomplete="on"
            @if($required ?? false)
                required
            @endif
            @if($disabled ?? false)
                disabled
            @endif
            @if($readonly ?? false)
                readonly
            @endif
            @isset($value)
                value="{{$value}}"
            @endisset
            class="p-2 border rounded w-full border border-{{ config('ui-builder.system.color','indigo') }}-200 shadow focus:shadow-none hover:shadow-none
            @error($code)
                border-red-500
            @enderror
            @if($disabled ?? false || ($readonly ?? false))
                bg-{{ config('ui-builder.system.color','indigo') }}-100 shadow-none cursor-not-allowed
            @endif
        ">
        <!-- End Input -->

        <!-- Feedback -->
        @error($code)
        <p class="mt-1 text-sm text-red-500">
            {{ $message }}
        </p>
        @enderror
        <!-- Feedback -->
    
    </div>

</div>
<!-- End Input Block -->