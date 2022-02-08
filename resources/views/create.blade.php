<h1>Crear nueva espada</h1>
<form method="post" action="{{ route('espadas.store') }}">
    @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
    <label>
        Nombre
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
    </label>
    <label>
        Color <br>
        <input type="radio" name="color" value="Blanca" checked={{ old('color') == "Blanca" }}/>  <label>Blanca</label> <br>
        <input type="radio" name="color" value="Negra" checked={{ old('color') == "Negra" }}/>  <label>Negra</label><br>
    </label>
    <label>
        Creacion
        <input type="date" name="creacion" value="{{ old('creacion') }}"/><br>
    </label>
    <label>
        Descripción
        <textarea name="descripcion" value="{{ old('descripcion') }}"></textarea><br>
    </label>
    <label>
        Herrero:
    </label>
    <select name="herrero">
        <option value="Andre" selected={{ old('herrero') == "Andre" }}>Andre</option>
        <option value="Godo" selected={{ old('herrero') == "GOdo" }}>Godo</option>
    </select><br>
    <label>
        Longitud
        <input type="number" name="longitud" value="{{ old('longitud') }}"/><br>
    </label>
    <button>Crear</button>
</form>
