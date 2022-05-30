<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MenuReservaEntity extends Entity
{

    protected $datamap = [
        "menu_reserva_id" => "menu_reserva_id",
        "menu_id" => "menu_id",
        "reserva_id" => "reserva_id"
    ];

    protected $casts   = [];
}
?>