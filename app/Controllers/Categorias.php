<?php

namespace App\Controllers;

class Categorias extends BaseController {

    public $categoriasHome = NULL;


public function __construct(){
    helper(['form']);
     $this->categoriasHome = model('CategoriasModel');
 }

 public function index()
 {
    $data['categorias'] = $this->categoriasHome->get_categorias();
    
     return view('categorias',$data);
 }

}

