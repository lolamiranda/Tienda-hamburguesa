<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
   
    protected $table = 'usuarios'; 


    public function verificarCredenciales($nombre, $contra)
    {
        $query = $this->where('nombre', $nombre)
                      ->where('contra', $contra)
                      ->get();

        if ($query->getResult()) {
            return true; 
        } else {
            return false; 
        }
    }


public function usuarios_lst(){
    $sql = "SELECT * FROM usuarios;";
    $query = $this->db->query($sql);
    $result = $query->getResult();

    if(count($result) > 0){
        return $result;
    } else {
        return NULL;
    }
}

    public function obtenerId($nombreUsuario){
        {
            var_dump($nombreUsuario);
            echo($nombreUsuario);
            return $nombreUsuario;
        }
    }

    public function obtenerContraseñaPorNombre($nombre)
    {
        $usuario = $this->where('nombre', $nombre)->first();

        if ($usuario) {
            return $usuario['contra'];
        } else {
            return null; // Retornar null si el usuario no se encuentra
        }
    }
}

