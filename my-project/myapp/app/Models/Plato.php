<?php
namespace App\Models;

use CodeIgniter\Model;

class Plato extends Model{
    protected $table= 'productos';
    protected $primaryKey = 'id_productos';
    protected $allowedFields=['nombre','descripcion','precio','foto'];
}