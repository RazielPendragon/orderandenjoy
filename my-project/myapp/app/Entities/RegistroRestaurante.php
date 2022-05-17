<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroRestaurante extends Entity
{

    protected $datamap = [
//        "id_restaurante" => "usuario_restaurante_id",
//       "NombreCompleto" => "usuario_restaurante_nombre_completo",
//        "correo" => "usuario_restaurante_correo",
//        "clave" => "usuario_restaurante_clave",
//        "telefono" => "usuario_restaurante_telefono",

        "id_restaurante" => "usuario_restaurante_id",
        "NombreFantasia" => "usuario_restaurante_nombre_fantasia",
        "RestauranteCiudad" => "usuario_restaurante_ciudad",
        "RestauranteComuna" => "usuario_restaurante_comuna",
        "RestauranteDireccion" => "usuario_restaurante_direccion",
        "telefono" => "usuario_restaurante_telefono",
        "correo" => "usuario_restaurante_correo",
        "clave" => "usuario_restaurante_clave",

    ];

    protected $casts   = [];
}
?>