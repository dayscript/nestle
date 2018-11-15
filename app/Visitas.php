<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
        protected $fillable = [
            'ciudad',
            'fecha_visita',
            'punto_venta',
            'nombre_tendero',
            'nombre_visitador',
            'barrio',
            'direccion',
            'celular',
            'numero_visita',
            'nit',
            'ventas',
            'inflatablesNescafe1',
            'inflatablesNescafe2',
            'inflatablesNescafe3',
            'inflatablesNescafe4',
            'inflatablesNescafe5',
            'inflatablesMaggi1',
            'inflatablesMaggi2',
            'inflatablesMaggi3',
            'inflatablesMaggi4',
            'inflatablesMaggi5',
            'inflatablesMaggi6',
            'inflatablesMaggi7',
            'caras_ex_nescafe',
            'caras_ex_maggi',
            'caras_ad_nescafe',
            'caras_ad_maggi',
            'stickers',
            'images',
            'ganador',
            'observaciones', 
    ];
}
