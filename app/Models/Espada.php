<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espada extends Model
{
    protected $fillable= ['nombre', 'color','creacion','descripcion','herrero','longitud'];
    protected $table = 'Espadas';
    public $timestamps = false;
    public $incrementing = true;
}
