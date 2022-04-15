/* Table 'Mesa' */
CREATE TABLE restaurantes.`Mesa`(
  mesa_id INT(100),
  `n° mesa` INT(100),
  estado_mesa VARCHAR(100),
  capacidad_mesa INT(20),
  restaurantes_id INT NOT NULL,
  PRIMARY KEY(mesa_id)
) COMMENT 'Mesas';