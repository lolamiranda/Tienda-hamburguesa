<?php

namespace App\Controllers;

use App\Models\CarritoModel;

class Callumapal extends BaseController
{
    public $callHome = NULL;

    public function __construct(){
        helper(['form']);
         $this->callHome = model('CarritoModel');
     }

  
    
    public function index()
    {   
        $direccion = $_POST['direccion'];
        $codigopostal = $_POST['codigo_postal'];
        $ciudad = $_POST['ciudad'];

        $usuario =  $this->session->get("usuario");


        $compra = $this->callHome->get_carrito($usuario);

        $total = 0;
        $nombres = [];
     

    foreach ($compra as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
        $nombres[] = $producto['nombre'];
        $id[] = $producto['id'];
        $precios[] = $producto['precio'];
        $cantidades[] = $producto['cantidad'];
    }
    $nombres =  implode('/', $nombres);
    $ides =  implode('/', $id);
    $precios =  implode('/', $precios);
    $cantidades =  implode('/', $cantidades);


    $peticionActual = bin2hex(random_bytes(16));


    $data = [
        'carrito' => $compra,
        'nombres' => $nombres,
        'ides' => $ides,
        'precios' => $precios,
        'cantidades' => $cantidades,
        'total' => $total, 
        'direccion' => $direccion,
        'codigopostal' => $codigopostal,
        'ciudad' => $ciudad,
        'usuario' =>$usuario,
        'peticionActual' => $peticionActual,
    ];

    return view('callumapal', $data);
}

}

