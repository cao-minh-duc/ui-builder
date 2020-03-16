<form 
    action="{{route($route,$routeParams ?? [])}}" 
    method="{{'GET' === $method ? $method : 'POST'}}"
    @if($isUploadFile ?? false)
        enctype="multipart/form-data"
    @endif
>

    @if('POST' !== $method && 'GET' !== $method)
        @method($method)
    @endif
    @csrf
    {{ $slot }}
    
</form>