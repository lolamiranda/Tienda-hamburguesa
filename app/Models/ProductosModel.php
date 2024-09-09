<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';

    public function getProductosByCategoria($categoriaId)
    {
        $productos = $this->where('id_categorias', $categoriaId)->findAll();
    
        if ($productos === null) {
            $error = $this->db->error();
            echo "Error en la consulta: {$error['message']}";
        }
    
        return $productos;
    }


     public function getProductoById($productoId)
    {
        $producto = $this->find($productoId);

        return $producto;
    }
    

}
