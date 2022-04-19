<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MesaEntity extends Entity
{

    protected $datamap = [
        "mesa" => "mesa_id",
        "numero mesa" => "n_mesa",
        "estado mesa" => "estado_mesa",
        "capacidad mesa" => "capacidad_mesa",
        "restaurante" => "restautante_id",
        "dia reserva" => "dia_reserva",
    ];

    protected $casts   = [];
}
?>