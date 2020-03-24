
<!-- Input Block -->
<div class="mx-2 my-4 
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    <label for="{{$code ?? ''}}" class="block my-3 font-bold lg:w-1/3">
        {{$name}}
    </label>
    <!-- End Input Label -->

    <!-- Input -->
    {{$slot}}
    <!-- End Input -->

    <!-- Feedback -->
    @error($code)
    <p class="mt-1 text-sm text-red-500">
        {{ $message }}
    </p>
    @enderror
    <!-- Feedback -->

</div>
<!-- End Input Block -->