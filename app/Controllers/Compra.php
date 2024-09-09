<?php

namespace App\Controllers;

use App\Models\CompraModel;

class Compra extends BaseController
{

    public $compraHome = NULL;
    public $carritoHome = NULL;

    public function __construct(){
        helper(['form']);
         $this->compraHome = model('CompraModel');
         $this->carritoHome = model('CarritoModel');
     }

  
    public function index()
    {
        return view('compra');
    }



    public function verDetalles()
    {
        $nombre =  $this->session->get("usuario");
        $usuario = $this->compraHome->getUsuario($nombre);
       return view('compra',['usuario' => $usuario]);
    }

    public function pago()
    {
       return view('callumapal');
    }

    public function verCompras(){

        $usuario =  $this->session->get("usuario");
        $compra = $this->carritoHome->get_compra($usuario);

        $data = [
            'carrito' => $compra,
        ];

        return view('verCompras',$data);
    }

}

