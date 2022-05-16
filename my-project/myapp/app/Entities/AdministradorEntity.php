<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class AdministradorEntity extends Entity
{

    protected $datamap = [
        "id_restaurante" => "usuario_restaurante_id",
        "nombreCompletoRestaurante" => "nombre_completo",
        "cuidadRestaurante" => "cuidad",
        "comunaRestaurante" => "comuna",
        "direccionRestaurante" => "direccion",
        "telefonoRestaurante" => "telefono",
        "correoRestaurante" => "correo_restaurante",
        "contraseñaRestaurante" => "contraseña_restaurante",

    ];

    protected $casts   = [];
}
?>