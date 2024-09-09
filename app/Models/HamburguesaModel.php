<?php

namespace App\Models;

use CodeIgniter\Model;

class HamburguesaModel extends Model
{
    protected $table = 'hamburguesas';

    public function agregarHamburguesa($tipo_hamburguesa, $cantidad)
    {
        $data = [
            'tipo_hamburguesa' => $tipo_hamburguesa,
            'cantidad' => $cantidad
        ];

        $this->db->table($this->table)->insert($data);

        $error = $this->db->error();

        if ($error['code'] !== 0) {
            echo 'Error al insertar en la base de datos: ' . $error['message'];
            return false;
        }

        echo 'Datos insertados correctamente.';
        return true;
    }
}
