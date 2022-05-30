<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class DisponibilidadMesaEntity extends Entity
{

    protected $datamap = [
        "disponibilidad_id" => "disponibilidad_id",
        "dia_reserva" => "dia_reserva",
        "mesa_id" => "mesa_id"
    ];

    protected $casts   = [];
}
?>