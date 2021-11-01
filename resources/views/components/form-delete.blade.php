<form method="POST" action="{{$url}}">
    @method('DELETE')
    @csrf

    <button type="submit" class="btn btn-link p-0">
        {{$label ?? 'Delete'}}
    </button>

</form>