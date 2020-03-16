<div class="m-4 bg-white border border-{{ config('ui-builder.system.color','indigo') }}-200 rounded-lg shadow-md">
    <div class="px-8 py-6 font-bold border-b border-{{ config('ui-builder.system.color','indigo') }}-200">
        <h2 class="text-{{ config('ui-builder.system.color','indigo') }}-900">
            {{$title}}
        </h2>
    </div>

    <div class="p-6">
        <div class="flex flex-wrap max-w-3xl mx-auto ">
        {{$slot}}
        </div>
    </div>
</div>