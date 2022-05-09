<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroComensal extends Entity
{

    protected $datamap = [
        "id_comensal" => "usuario_comensal_id",
        "NombreCompleto" => "usuario_comensal_nombre_completo",
        "correo" => "usuario_comensal_correo",
        "clave" => "usuario_comensal_clave",
        "telefono" => "usuario_comensal_telefono",
    ];

    protected $casts   = [];
}
?>