<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroContactoEntity extends Entity
{

    protected $datamap = [
        "id_contacto" => "contacto_id",
        "nombreCompleto" => "nombre_completo",
        "razonSocial" => "razon_social",
        "rutRestaurante" => "rut",
        "nombreFantasia" => "nombre_fantasia",
        "correoContacto" => "correo_contacto",
        "cuidad" => "cuidad",
        "comuna" => "comuna",
        "direccion" => "direccion",
        "contactoTelefono" => "contacto_telefono",
    ];

    protected $casts   = [];
}
?>