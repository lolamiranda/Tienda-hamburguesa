<?php

namespace App\Controllers;

class Home extends BaseController
{
  
    public $modelHome = NULL;
    
    public function __construct(){
        
       $this->session = \Config\Services::session();
        $this->session->start();

       helper(['form']);
       helper(['session']);
      
        $this->modelHome = model('HomeModel'); 

        
    }

    public function index()
    {
    return view('home');
    }

    public function destruir()
    {
    $this->session->destroy();
    return view('home');
    }

   

    public function verificarUsuarios(){

        $nombre = $this->request->getPost('nombre');
        $contra = $this->request->getPost('contra');
        
        $contraC = hash('sha256', $contra);
        $contraA = $this->modelHome->obtenerContraseñaPorNombre($nombre);

        if($contraA == $contraC){
            $this->session->set('usuario', $nombre);
          
            return redirect()->to('categorias');
        } else {
            $data['mensajeError'] = "¡Aún no estás registrado!";
            return view('home', $data);
        }

   
}
    

    
}