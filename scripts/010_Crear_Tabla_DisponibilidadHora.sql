/* Table 'DisponibilidadHora' */
CREATE TABLE `DisponibilidadHora`(
  hora_id INT(11) NOT NULL,
  hora TIME NOT NULL,
  disponibilidad_id INT(11) NOT NULL,
  reservada int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY(hora_id)
);