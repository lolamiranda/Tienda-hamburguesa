<?php

namespace App\Controllers;


use App\Models\CarritoModel;

class Formsucess extends BaseController {

        public $callHome = NULL;

        public function __construct(){
                helper(['form']);
                $this->callHome = model('CarritoModel');
             }
    
             
        public function index()
        {          
             $peticionActual = $_POST['cartID'];
             
             $data = [
                'peticionActual' => $peticionActual,
             ];

             $usuario = $this->session->get("usuario");

             $compra = $this->callHome->comprado($usuario);
             
             return view('sucess',$data);
        }

        
}

