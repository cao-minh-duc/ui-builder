<div class="flex justify-end w-full h-full">
    <form action="" method="get">
            
                <!-- Input -->
                <input
                    name="search" 
                    type="text"
                    required
                    class="p-2 rounded border border-{{ config('ui-builder.system.color') }}-200 shadow focus:shadow-none hover:shadow-none">
                <!-- End Input -->
                
                @include('ui-builder::action.buttons.submit',[
                    'name' => __('Search'),
                ])
        </div>
    </form>
</div>