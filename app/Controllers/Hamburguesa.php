<?php

namespace App\Controllers;

class Hamburguesa extends BaseController
{
    public $hamburguesaHome = NULL;

    public function __construct(){
        helper(['form']);
        $this->hamburguesaHome = model('HamburguesaModel');
    }

    

    public function index()
    {
        return view('hamburguesa');
    }

    public function agregarHamburguesa()
    {
        $tipo_hamburguesa = $this->request->getPost('tipo_hamburguesa');
        $cantidad = $this->request->getPost('cantidad');
    
        if (empty($tipo_hamburguesa) || empty($cantidad)) {
            echo 'Error: Debes proporcionar todos los datos.';
            return;
        }
        
        $this->hamburguesaHome->agregarHamburguesa($tipo_hamburguesa, $cantidad);
        }
        
    }



