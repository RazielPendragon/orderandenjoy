<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioEntity extends Entity
{
    protected $datamap = [
        "id" => "usuario_id",
        "nombre_completo" => "usuario_nombre_completo",
        "correo" => "usuario_correo",
    ];

    protected $casts   = [];
}
?>