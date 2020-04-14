<div class="w-full min-w-full px-6 py-4 text-sm whitespace-no-wrap md:text-base">
    <table class="w-full {{$isEmpty ? 'table-auto' : 'table-fixed'}} border border-{{ config('ui-builder.system.color') }}-200 shadow">
        {{$slot}}
    </table>
</div>