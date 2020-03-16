<!-- Input Block -->
<div class="mx-2 my-4 
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    <label for="{{$code}}" class="block w-full mb-3 font-bold lg:w-1/3">
        {{$name}}
    </label>
    <!-- End Input Label -->

    <div class="w-full">

        <!-- Input -->
        <input 
            id="{{$code}}" 
            name="{{$code}}" 
            type="file" 
            @isset($required)
                {{$required}}
            @endisset
            autocomplete="on"
            class="p-2 border rounded w-full    
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
<!-- End Input Block -->