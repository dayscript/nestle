<?php

namespace App\Imports;

use App\User;
use App\Store;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class StoresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
     
        if (!isset($row[0])) {
            return null;
        }

        return new Store([
            'regional' => $row[0],
            'distribuidor' => $row[1],
            'nit' => $row[2],
            'nombre_cliente' => $row[3],
            'razon_social' => $row[4],
            'direccion' => $row[5],
            'barrio' => $row[6],
            'telefono' => $row[7],
            'ciudad' => $row[8],
            'n_visita' => $row[9],
        ]);
    }
}
