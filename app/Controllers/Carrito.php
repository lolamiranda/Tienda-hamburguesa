<?php

namespace App\Controllers;

class Carrito extends BaseController
{
    public $carritoHome = NULL;
  

    public function __construct(){
        helper(['form']);
         $this->carritoHome = model('CarritoModel');
     }
    
    public function index()
    {   
        $usuario =  $this->session->get("usuario");
        $compra = $this->carritoHome->get_carrito($usuario);

        $total = 0;
        foreach ($compra as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }

    $data = [
        'carrito' => $compra,
        'total' => $total, 
    ];

    return view('carrito', $data);
}

      

     public function add() {
        $nombre_producto = $_POST['nombre_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];

        $usuario =  $this->session->get("usuario");


        $this->carritoHome->add_carrito($nombre_producto, $cantidad, $precio, $usuario);
            
          $compra = $this->carritoHome->get_carrito($usuario);


        $total = 0;
        foreach ($compra as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }

    


    $data = [
        'carrito' => $compra,
        'total' => $total, 
    ];

    return view('carrito', $data);
}

       


    
      public function eliminarProducto() {
        $nombre = $this->request->getPost('id');

        $mensaje = $this->carritoHome->eliminarProducto1($nombre);

        return redirect()->route('carrito')->with('mensaje', $mensaje);

    }
    }
