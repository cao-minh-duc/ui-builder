<div class="m-4 bg-white border border-default-200 rounded-lg shadow-md">
    <div class="px-8 py-6 font-bold border-b border-default-200">
        <h2 class="text-default-900">
            {{$title}}
        </h2>
    </div>

    <div class="p-6">
        <div class="flex flex-wrap max-w-3xl mx-auto ">
        {{$slot}}
        </div>
    </div>
</div>