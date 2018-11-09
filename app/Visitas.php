<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
        protected $fillable = [
        	'nit',
            'nombre_cliente',
        	'razon_social',
        	'n_visita',
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
			'imgNescafe1',
			'imgNescafe2',
        	'imgNescafe3',
        	'imgNescafe4',
        	'imgNescafe5',
        	'imgMaggi1',
        	'imgMaggi2',
        	'imgMaggi3',
        	'imgMaggi4',
        	'imgMaggi5',
        	'imgMaggi6',
        	'imgMaggi7', 
            'observaciones', 
    ];
}
