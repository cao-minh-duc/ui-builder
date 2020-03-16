<div class="mx-2 my-3
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    <label for="{{$code}}" class="block w-full my-3 font-bold text-{{ config('ui-builder.system.color','indigo') }}-900 lg:w-1/3">
        {{$name}}
    </label>
    <!-- End Input Label -->
    <div class="w-full">
        <!-- Input -->
        <input 
            id="{{$code}}" 
            name="{{$code}}" 
            type="text" 
            autocomplete="on" 
            @isset($value)
                value="{{$value}}"
            @endisset 
            @if($required ?? true)
                required
            @endif
            class="p-2 border rounded w-full border border-{{ config('ui-builder.system.color','indigo') }}-200 shadow focus:shadow-none hover:shadow-none
            @error($code)
                border-red-500
            @enderror
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
