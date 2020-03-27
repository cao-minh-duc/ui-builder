<header
    class="flex items-center justify-between text-gray-400 bg-{{config('ui-builder.system.color','indigo')}}-700 text-tiny lg:text-sm lg:w-40 lg:flex-col lg:h-screen lg:fixed">

    @include('ui-builder::sidebar.logo')

    @if (Auth::check())
    @component('ui-builder::sidebar.feature')
        @foreach(config('ui-builder.sidebar.features') as $feature)
            <li class="w-full">
                <a 
                    href="{{ isset($feature['default_route']) && \Route::has($feature['default_route']) ? route($feature['default_route']) : '#' }}" 
                    class="block pt-3 pb-2 text-center lg:py-4 
                        @if(
                            Str::startsWith(
                                Route::currentRouteName(),
                                $feature['route_prefix']
                            )
                        ) 
                            text-white bg-{{config('ui-builder.system.color','indigo')}}-900 
                        @else
                            text-white bg-{{config('ui-builder.system.color','indigo')}}-700 
                        @endif
                    "
                >
                    <div class="w-6 h-6 mx-auto fill-current">
                        {!! $feature['icon']!!}
                    </div>
                    <span>
                        @lang('ui-builder::menu.feature.'.$feature['code'])
                    </span>
                </a>
            </li>
        @endforeach
    @endcomponent
    @endif

    @include('ui-builder::sidebar.account')
</header>
