/* Table 'DisponibilidadHora' */
CREATE TABLE `DisponibilidadHora`(
  hora_id INT(11) NOT NULL,
  hora TIME NOT NULL,
  disponibilidad_id INT(11) NOT NULL,
  PRIMARY KEY(hora_id)
);