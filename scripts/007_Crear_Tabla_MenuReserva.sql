/* Table 'MenuReserva' */
CREATE TABLE restaurantes.MenuReserva(
  menu_reserva_id INT NOT NULL,
  menu_id INT(11) NOT NULL,
  reserva_id INT(11) NOT NULL,
  PRIMARY KEY(menu_reserva_id)
);