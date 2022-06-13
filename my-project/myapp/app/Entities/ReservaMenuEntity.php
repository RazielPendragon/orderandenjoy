<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ReservaMenuEntity extends Entity
{

    protected $datamap = [
        "menu_reserva_id" => "menu_reserva_id",
        "menu_id" => "menu_id",
        "reserva_id" => "reserva_id",
        "menu_cantidad" => "menu_cantidad"

    ];

    protected $casts   = [];
}
?>