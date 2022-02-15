<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','estado','image'];

    public function subcategorias()
    {
        return $this->hasMany('App\Models\Subcategoria');
    }
    public function getRouteKeyName()
    {
        return 'id';
    }

}
