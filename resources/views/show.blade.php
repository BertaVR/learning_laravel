<h3>{{ $item->nombre }}:<h3>
<small>Color: {{ var_dump($item->color) }}</small><br>
<small>Precio: {{ var_dump($item->precio) }}</small><br>
<small>Id: {{ var_dump($item->id) }}</small><br>

<form method="post" action="{{ route('items.destroy', $item->id) }}">
    @method('delete')
    @csrf
    <button>Borrar</button>
</form>