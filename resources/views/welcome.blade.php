<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<h1>Bienvenido </h1>
@guest
    <p>No has iniciado sesión</p> <br>
@else
    {{ auth()->user()->name }}<br>
@endguest
@guest
    <a href="/login">Login</a>
@else
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
@endguest
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

</html>
