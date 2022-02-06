<h3>{{ $espada->nombre }}:<h3>
<small>Color: {{ var_dump($espada->color) }}</small><br>
<small>Descripción: {{ var_dump($espada->descripcion) }}</small><br>

<form method="post" action="{{ route('espadas.destroy', $espada->id) }}">
    @method('delete')
    @csrf
    <button>Eliminar</button>
</form>