<h1>Espadas</h1>
<ul>
    @forelse ($espadas as $espadaItem)
        <li>
            <h3>{{ $espadaItem->nombre }}:<h3>
            <small>Color: {{ var_dump($espadaItem->color) }}</small><br>
            <small>Descripción: {{ var_dump($espadaItem->descripcion) }}</small><br>
        </li>
    @empty

    @endforelse

</ul>
