/* Table 'UsuarioRestaurante' */
use restaurantes;
CREATE TABLE `UsuarioRestaurante`(
  usuario_restaurante_id INT(11) NOT NULL AUTO_INCREMENT,
  usuario_restaurante_nombre_fantasia VARCHAR(300) NOT NULL,
  usuario_restaurante_ciudad VARCHAR(300) NOT NULL,
  usuario_restaurante_comuna VARCHAR(300) NOT NULL,
  usuario_restaurante_direccion VARCHAR(300) NOT NULL,
  usuario_restaurante_telefono VARCHAR(300) NOT NULL,
  usuario_restaurante_correo VARCHAR(100) NOT NULL,
  usuario_restaurante_clave VARCHAR(300) NOT NULL,
  usuario_restaurante_tiempo INT(11) NOT NULL,
  PRIMARY KEY (usuario_restaurante_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'Mesa' */
CREATE TABLE `Mesa`(
  mesa_id INT(100) NOT NULL AUTO_INCREMENT,
  n_mesa INT(100),
  estado_mesa VARCHAR(100),
  capacidad_mesa INT(20),
  restaurantes_id INT(11) NOT NULL,
  PRIMARY KEY (mesa_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'DisponibilidadMesa' */
CREATE TABLE `DisponibilidadMesa`(
  disponibilidad_id INT(11) NOT NULL AUTO_INCREMENT,
  dia_reserva TIME NOT NULL,
  mesa_id INT(100) NOT NULL,
  PRIMARY KEY (disponibilidad_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/* Table 'Reserva' */
CREATE TABLE `Reserva`(
  reserva_id INT(11) NOT NULL AUTO_INCREMENT,
  cantidad_personas INT(11) NOT NULL,
  comensal_id INT(11) NOT NULL,
  hora_id INT(11) NOT NULL,
  PRIMARY KEY (reserva_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'UsuarioComensal' */
CREATE TABLE `UsuarioComensal`(
  usuario_comensal_id INT(11) NOT NULL AUTO_INCREMENT,
  usuario_comensal_nombre_completo VARCHAR(300) NOT NULL,
  usuario_comensal_correo VARCHAR(100) NOT NULL,
  usuario_comensal_clave VARCHAR(300) NOT NULL,
  usuario_comensal_telefono VARCHAR(300) NOT NULL,
  PRIMARY KEY (usuario_comensal_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'Menu' */
CREATE TABLE `Menu`(
  menu_id INT(11) NOT NULL AUTO_INCREMENT,
  menu_nombre VARCHAR(100),
  menu_descripcion VARCHAR(700),
  menu_precio INT(10),
  id_usuarios INT(11) NOT NULL,
  PRIMARY KEY (menu_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'MenuReserva' */
CREATE TABLE `MenuReserva`(
  menu_reserva_id INT NOT NULL AUTO_INCREMENT,
  menu_id INT(11) NOT NULL,
  reserva_id INT(11) NOT NULL,
  PRIMARY KEY(menu_reserva_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Table 'DisponibilidadHora' */
CREATE TABLE `DisponibilidadHora`(
  hora_id INT(11) NOT NULL,
  hora TIME NOT NULL,
  disponibilidad_id INT(11) NOT NULL,
  reservada int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY(hora_id)
);

CREATE TABLE `UsuarioContacto` (
usuario_contacto_id int(11) NOT NULL AUTO_INCREMENT,
usuario_contacto_nombre_completo varchar(300) NOT NULL,
usuario_contacto_razon_social varchar(300) NOT NULL,
usuario_contacto_rut varchar(300) NOT NULL,
usuario_contacto_nombre_fantasia varchar(300) NOT NULL,
usuario_contacto_cuidad varchar(300) NOT NULL,
usuario_contacto_comuna varchar(300) NOT NULL,
usuario_contacto_direccion varchar(300) NOT NULL,
usuario_contacto_correo varchar(100) NOT NULL,
usuario_contacto_telefono varchar(300) NOT NULL,
  
  PRIMARY KEY (usuario_contacto_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Relation 'UsuarioRestaurante_Mesa' */
ALTER TABLE `Mesa`
  ADD CONSTRAINT `UsuarioRestaurante_Mesa`
    FOREIGN KEY (restaurantes_id)
      REFERENCES `UsuarioRestaurante` (usuario_restaurante_id);

/* Relation 'Mesa_DisponibilidadMesa' */
ALTER TABLE `DisponibilidadMesa`
  ADD CONSTRAINT `Mesa_DisponibilidadMesa`
    FOREIGN KEY (mesa_id) REFERENCES `Mesa` (mesa_id);

/* Relation 'UsuarioComensal_Reserva' */
ALTER TABLE `Reserva`
  ADD CONSTRAINT `UsuarioComensal_Reserva`
    FOREIGN KEY (comensal_id) REFERENCES `UsuarioComensal` (usuario_comensal_id)
  ;

/* Relation 'UsuarioRestaurante_Menu' */
ALTER TABLE `Menu`
  ADD CONSTRAINT `UsuarioRestaurante_Menu`
    FOREIGN KEY (id_usuarios)
      REFERENCES `UsuarioRestaurante` (usuario_restaurante_id);

/* Relation 'Menu_MenuReserva' */
ALTER TABLE `MenuReserva`
  ADD CONSTRAINT `Menu_MenuReserva`
    FOREIGN KEY (menu_id) REFERENCES `Menu` (menu_id);

/* Relation 'Reserva_MenuReserva' */
ALTER TABLE `MenuReserva`
  ADD CONSTRAINT `Reserva_MenuReserva`
    FOREIGN KEY (reserva_id) REFERENCES `Reserva` (reserva_id);

/* Relation 'DisponibilidadMesa_DisponibilidadHora' */
ALTER TABLE `DisponibilidadHora`
  ADD CONSTRAINT `DisponibilidadMesa_DisponibilidadHora`
    FOREIGN KEY (disponibilidad_id)
      REFERENCES `DisponibilidadMesa` (disponibilidad_id);

/* Relation 'DisponibilidadHora_Reserva' */
ALTER TABLE `Reserva`
  ADD CONSTRAINT `DisponibilidadHora_Reserva`
    FOREIGN KEY (hora_id) REFERENCES `DisponibilidadHora` (hora_id);
