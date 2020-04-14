@component('ui-builder::cards.default',[
    'title' => $title,
])
    <div class="flex flex-wrap max-w-3xl mx-auto ">
        {{$slot}}
    </div>
@endcomponent