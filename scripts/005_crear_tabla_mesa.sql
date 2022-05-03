CREATE TABLE restaurantes.Mesa (
  `mesa_id` int(100) NOT NULL AUTO_INCREMENT,
  `n_mesa` int(100) DEFAULT NULL,
  `estado_mesa` varchar(100) DEFAULT NULL,
  `capacidad_mesa` int(20) DEFAULT NULL,
  `restaurantes_id` int(11) NOT NULL,
  `dia_reserva` date DEFAULT NULL,
  PRIMARY KEY (`mesa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Mesas';