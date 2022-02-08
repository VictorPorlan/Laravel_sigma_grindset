<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Aprendiendo laravel como un sigma male

# Rutas

> "/" Zona de bienvenida
> "/login" Formulario de login
> "/espadas" Lista de todo el contenido de la bbdd de espadas
> "/espadas/{id}" Espada especifica
> "/espadas/create" Crear espada
> "/espdas/{id}/edit" Editar espada

# Apuntes
Crear Controller
```
php artisan make:controller 'Espadas' -r
```

Crear FormRequest
```
php artisan make:request CreateEspadasRequest
```

Crear Model
```
php artisan make:model 'Espada'
```

Crear autenticación
```
composer require laravel/ui
```
```
php artisan ui vue --auth
```
```
npm i
```
```
npm run dev
```

Esto creará un mini formulario de login / logout en la ruta "/login"