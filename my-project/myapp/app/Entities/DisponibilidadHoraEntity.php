<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class DisponibilidadHoraEntity extends Entity
{

    protected $datamap = [
        "hora_id" => "hora_id",
        "hora" => "hora",
        "disponibilidad_id" => "disponibilidad_id"
    ];

    protected $casts   = [];
}
?>