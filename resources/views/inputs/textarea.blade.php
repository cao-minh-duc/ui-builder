
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

    <!-- Input -->
    <textarea name="{{$code}}" id="{{$code}}" cols="30" rows="5"
        @if($required ?? false)
            required
        @endif
        class="p-2 border rounded w-full border border-{{ config('ui-builder.system.color','indigo') }}-200 shadow focus:shadow-none hover:shadow-none
        @error($code)
            border-red-500
        @enderror
        ">@isset($value){{$value}}@endisset</textarea>
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