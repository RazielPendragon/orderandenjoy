<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MenuEntity extends Entity
{

    protected $datamap = [
        "id" => "menu_id",
        "nombre" => "menu_nombre",
        "descripcion" => "menu_descripcion",
        "precio" => "menu_precio",
        "restaurante" => "id_usuarios",
    ];

    protected $casts   = [];
}
?>