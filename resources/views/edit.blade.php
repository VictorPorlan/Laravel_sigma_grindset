<h1>Editar nueva espada</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
    <li> {{ $error }}</li>
@endforeach
@endif
<form method="post" action="{{ route('espadas.update', $espada->id) }}">
    @method('patch')
    @csrf
    <label>
        Nombre
        <input type="text" name="nombre" value="{{ old('nombre', $espada->nombre) }}"><br>
    </label>
    <label>
        Color <br>
        <input type="radio" name="color" value="Blanca" checked={{ old('color', $espada->color) == "Blanca" }}/>  <label>Blanca</label> <br>
        <input type="radio" name="color" value="Negra" checked={{ old('color', $espada->color) == "Negra" }}/>  <label>Negra</label><br>
    </label>
    <label>
        Creacion
        <input type="date" name="creacion" value="{{ old('creacion', $espada->creacion) }}"/><br>
    </label>
    <label>
        Descripción
        <textarea name="descripcion">{{ old('descripcion', $espada->descripcion)  }}</textarea><br>
    </label>
    <label>
        Herrero:
    </label>
    <select name="herrero">
    <option value="Andre" selected={{ old('herrero', $espada->herrero) == "Andre" }}>Andre</option>
    <option value="Godo" selected={{ old('herrero', $espada->herrero) == "GOdo" }}>Godo</option>
    </select><br>
    <label>
        Longitud
        <input type="number" name="longitud" value="{{ old('longitud', $espada->longitud)  }}"/><br>
    </label>
    <button>Editar</button>
</form>
