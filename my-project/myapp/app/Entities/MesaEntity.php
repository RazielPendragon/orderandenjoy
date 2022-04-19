<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MenuEntity extends Entity
{

    protected $datamap = [
        "restaurante" => "restaurantes_id",
        "Cod.mesa" => "mesa_id",
        "n°mesa" => "n° mesa",
        "capacidad" => "capacidad_mesa",
        "disponibilidad" => "estado_mesa",
    ];

    protected $casts   = [];
}
?>