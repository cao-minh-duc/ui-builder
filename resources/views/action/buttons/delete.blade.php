<button 
    type="button" 
    class="h-full px-3 py-2 text-white bg-{{$color ?? 'red'}}-700 rounded hover:bg-{{$color ?? 'red'}}-900 shadow-md hover:shadow-none"
    dusk="delete-button"
    onclick="sendDeleteRequest('{{$url}}')"
>
    {{$name}}
</button>