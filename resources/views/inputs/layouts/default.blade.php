<!-- Input Block -->
<div class="mx-2 my-4 
        @if($isInline ?? true)
            lg:flex
        @endif
    ">

    <!-- Input Label -->
    @include('ui-builder::inputs.labels.default')
    <!-- End Input Label -->
    <div class="flex flex-col justify-center w-full">
    
        <!-- Input -->
        {{$slot}}
        <!-- End Input -->

        <!-- Feedback -->
        @include('ui-builder::inputs.feedbacks.default')
        <!-- Feedback -->
    </div>

</div>
<!-- End Input Block -->