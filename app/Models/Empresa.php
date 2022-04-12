<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','dni_ruc','telefono','celular','email','whattsap','logo','slogan','descripcion','estado','estrellas','num_visitas','descripcion_breve','titulo','title','keywords','empresacol','slug'];
    
}
