<h1>Items</h1>
<ul>
    @forelse ($items as $item)
        <li>
            <h3>{{ $item->nombre }}:<h3>
            <small>Color: {{ var_dump($item->color) }}</small><br>
            <small>Precio: {{ var_dump($item->precio) }}</small><br>
            <small>Id: {{ var_dump($item->id) }}</small><br>

        </li>
    @empty

    @endforelse

</ul>
