<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ReservaMesaEntity extends Entity
{

    protected $datamap = [
        "reserva_id" => "reserva_id",
        "cantidad_personas" => "cantidad_personas",
        "comensal_id" => "comensal_id",
        "hora_id" => "hora_id"
    ];

    protected $casts   = [];
}
?>