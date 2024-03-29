<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MesaEntity extends Entity
{

    protected $datamap = [
        "mesa" => "mesa_id",
        "nombre_mesa" => "n_mesa",
        "estado_mesa" => "estado_mesa",
        "capacidad_mesa" => "capacidad_mesa",
        "restaurante" => "restaurantes_id",
    ];

    protected $casts   = [];
}
?>