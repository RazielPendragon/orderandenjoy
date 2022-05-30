use restaurantes;
/* Table 'DisponibilidadMesa' */
CREATE TABLE `DisponibilidadMesa`(
  disponibilidad_id INT(11) NOT NULL,
  dia_reserva INT(11) NOT NULL,
  mesa_id INT(100) NOT NULL,
  PRIMARY KEY(disponibilidad_id)
);