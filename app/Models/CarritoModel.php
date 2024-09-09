<?php

namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model {

    protected $table = 'carrito';

    public function add_carrito($nombre_producto, $cantidad, $precio,$usuario){
        
        $data = [
            'nombre' => $nombre_producto,
            'cantidad' => $cantidad,
            'usuario' => $usuario,
            'precio' => $precio,
        ];

        $this->db->table($this->table)->insert($data);

        $error = $this->db->error();

        if ($error['code'] !== 0) {
            echo 'Error al insertar en la base de datos: ' . $error['message'];
            return false;
        }

        return true;
    }

    public function get_carrito($usuario)
    {
        
        $carrito = $this->where('usuario', $usuario)->where('comprado', 0)->findAll();
    
        if ($carrito === null) {
            $error = $this->db->error();
            echo "Error en la consulta: {$error['message']}";
        }
    
        return $carrito;
    }


    public function get_compra($usuario)
    {
        
        $carrito = $this->where('usuario', $usuario)->where('comprado', 1)->findAll();
    
        if ($carrito === null) {
            $error = $this->db->error();
            echo "Error en la consulta: {$error['message']}";
        }
    
        return $carrito;
    }

    public function eliminarProducto1($nombre) {
        if ($this->where('id', $nombre)->delete()) {
            return "¡Producto eliminado con éxito!";
        } else {
            return "No se encontró el producto o no se pudo eliminar.";
        }
    }

    public function comprado($usuario){
       
        $compra = $this->db->table($this->table)->where('usuario',$usuario)->update(['comprado' => 1]);

        return $compra;
    }
}
    
    


