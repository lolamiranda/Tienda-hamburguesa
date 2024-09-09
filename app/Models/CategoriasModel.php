<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriasModel extends Model {

    protected $table = 'categorias';

    public function get_categorias() {
        try {
            $query = $this->db->table($this->table)->get();
            return $query->getResult();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    

    public function getCategoryById($categoryId)
    {
        $categoria = $this->find($categoryId);

        return $categoria;
    }
}
