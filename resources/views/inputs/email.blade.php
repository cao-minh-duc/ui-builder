<div class="mx-2 my-3
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    @include('ui-builder::inputs.labels.basic')
    <!-- End Input Label -->
    <div class="w-full">
        <!-- Input -->
        <input 
            id="{{$id ?? $code}}" 
            name="{{$code}}" 
            type="email" 
            autocomplete="on" 
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
        @include('ui-builder::inputs.feedbacks.basic')
        <!-- Feedback -->
    </div>
</div>
