<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Menu extends Entity
{

    protected $datamap = [
        "id" => "menu_id",
        "nombre" => "menu_nombre",
        "descripcion" => "menu_descripcion",
        "precio" => "menu_precio",
    ];

    protected $casts   = [];
}
?>