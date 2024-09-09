<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public $registroHome = NULL;

    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        return view('registro_formulario');
    }

    

    public function procesarFormulario()
    {
        $this->registroHome = model('RegistroModel');

        $contra = $this->request->getPost('contra');
        $contraC = hash('sha256', $contra);            //codificamos la contraseña

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'contra' => $contraC,
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
        ];
    
        try {
            $result = $this->registroHome->insertarUsuario($data);
    
            if ($result) {
                echo view('hola', $data);
            } else {
                echo "Error al insertar usuario. Por favor, inténtelo de nuevo.";
            }
        } catch (\Exception $e) {
            log_message('error', 'Excepción al procesar el formulario: ' . $e->getMessage());
            echo "Error al procesar el formulario. Por favor, inténtelo de nuevo.";
        }
    
    }
    
}
