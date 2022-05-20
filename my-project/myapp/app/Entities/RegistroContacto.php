<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroContacto extends Entity
{

    protected $datamap = [
        "id_contacto" => "usuario_contacto_id",
        "NombreCompleto" => "usuario_contacto_nombre_completo",
        "RazonSocial" => "usuario_contacto_razon_social",
        "ContactoRut" => "usuario_contacto_rut",
        "NombreFantasia" => "usuario_contacto_nombre_fantasia",
        "ContactoCuidad" => "usuario_contacto_cuidad",
        "ContactoComuna" => "usuario_contacto_comuna",
        "ContactoDireccion" => "usuario_contacto_direccion",
        "correo" => "usuario_contacto_correo",
        "telefono" => "usuario_contacto_telefono",
    ];

    protected $casts   = [];
}