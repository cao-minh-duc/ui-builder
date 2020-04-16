<div class="flex justify-end w-full h-full">
    <form action="" method="get">
            
                <!-- Input -->
                <input
                    name="search" 
                    type="text"
                    required
                    class="p-2 border rounded shadow border-default-200 focus:shadow-none hover:shadow-none">
                <!-- End Input -->
                
                @include('ui-builder::action.buttons.submit',[
                    'name' => __('Search'),
                ])
        </div>
    </form>
</div>