<?php

namespace App\Models;

use CodeIgniter\Model;

class CompraModel extends Model
{
    protected $table = 'usuarios';

     public function getUsuario($nombre)
    {
        $usuario = $this->where('nombre', $nombre)->first();

        return $usuario;
    }
    

}
