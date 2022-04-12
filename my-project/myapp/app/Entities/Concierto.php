<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Concierto extends Entity
{

    protected $datamap = [
        "id" => "concierto_id",
        "nombre" => "concierto_nombre",
        "ubicacion" => "concierto_ubicacion",
    ];

    protected $casts   = [];
}
?>