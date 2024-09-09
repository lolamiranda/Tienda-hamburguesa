<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'usuarios';

    public function insertarUsuario($data)
    {

        $this->db->table($this->table)->insert($data);

 
        $error = $this->db->error();

        if ($error['code'] !== 0) {
            echo 'Error al insertar en la base de datos: ' . $error['message'];
            return false;
        }

        return true;
    }
}