<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable =  [
    	'regional', 'distribuidor', 'nit', 'nombre_cliente', 'razon_social', 'direccion', 'barrio', 'telefono', 'ciudad', 'n_visita',
    ];
}
