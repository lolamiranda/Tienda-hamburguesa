<?php

namespace App\Controllers;

class Formcancel extends BaseController {


        public function __construct(){
                helper(['form']);
             }
    
             
        public function index()
        {
            
             $peticionActual = $_POST['cartID'];

             
             $data = [
                'peticionActual' => $peticionActual,
             ];
             
             return view('cancel',$data);
        }
        
}
