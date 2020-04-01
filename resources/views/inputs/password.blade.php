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
            type="password" 
            autocomplete="on" 
            @isset($value)
                value="{{$value}}"
            @endisset 
            @if($disabled ?? false)
                {{$disabled}}
            @endif
            @if($required ?? false)
                {{$required}}
            @endif
            class="p-2 border rounded w-full  
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
