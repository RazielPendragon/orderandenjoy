/* Table 'Mesa' */
CREATE TABLE restaurantes.Mesa(
  mesa_id INT(100) NOT NULL,
  n_mesa INT(100),
  estado_mesa VARCHAR(100),
  capacidad_mesa INT(20),
  restaurante_id INT(11) NOT NULL,
  PRIMARY KEY(mesa_id)
);
