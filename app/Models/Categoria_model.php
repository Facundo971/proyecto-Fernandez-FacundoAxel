<?php
namespace App\Models;
use CodeIgniter\Model;

class Categoria_model extends Model{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descripcion', 'activo'];

    public function getCategoriaAll() {
        return $this->findAll();
    }
}