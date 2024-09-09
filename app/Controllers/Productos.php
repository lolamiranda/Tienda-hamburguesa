<?php

namespace App\Controllers;

use App\Models\ProductosModel;
use App\Models\CategoriasModel;

class Productos extends BaseController
{
    public $productosHome = NULL;
    public $categoriasHome = NULL;

    public function __construct()
    {
        helper(['form']);
        $this->categoriasHome = model('CategoriasModel');
        $this->productosHome = model('ProductosModel');
    }

    public function categoria($categoriaId)
    {
        $categoria = $this->categoriasHome->getCategoryById($categoriaId);

        $productos = $this->productosHome->getProductosByCategoria($categoriaId);

        $data = [
            'categoria' => $categoria,
            'productos' => $productos,
        ];
    
        return view('productos', $data);
    }

    public function detalles($productoId)
    {
        $producto = $this->productosHome->getProductoById($productoId);

        return view('detalles',  ['producto' => $producto]);
    }

}
