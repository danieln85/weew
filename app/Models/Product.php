<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'estado',
        'categoria',
        'imagen',
        'referencia',
        'reputacion',
        'descuento',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6'
    ];
}
