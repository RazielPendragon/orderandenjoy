use restaurantes;
/* Table 'Reserva' */
CREATE TABLE `Reserva`(
  reserva_id INT(11) NOT NULL,
  cantidad_personas INT(11) NOT NULL,
  comensal_id INT(11) NOT NULL,
  hora_id INT(11) NOT NULL,
  PRIMARY KEY(reserva_id)
);