@php
    $isHeigthFull = true;

@endphp

<div class="w-full lg:h-screen lg:ml-40">
    <h1 class="px-6 pt-4 text-2xl text-{{ config('ui-builder.system.color','indigo') }}-900">
        {{$title}}
    </h1>
    <!-- End Page Header -->


    <!-- Page Body -->
    <div class="flex flex-wrap items-center justify-center">

        <!-- Main Layout -->
        <div class="w-full">
            {{$slot}}
        </div>
    </div>
</div>
