<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Registro extends Entity
{

    protected $datamap = [
        "id_comensal" => "usuario_comensal_id",
        "NombreCompleto" => "usuario_comensal_mombre_completo",
        "correo" => "usuario_comensal_correo",
        "clave" => "usuario_comensal_clave",
        "telefono" => "usuario_comensal_telefono",
    ];

    protected $casts   = [];
}
?>