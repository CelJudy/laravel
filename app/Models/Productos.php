<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table="productos"; //tabla de la BD a la que hace referencia
    protected $fillable=[   //columnas de la tabla
        'id_producto',
        'nombre',
        'precio',
        'stock'
    ];

    protected $conection="pgsql";
    protected $primaryKey="id_producto";
    public $timestamp=false;
}
