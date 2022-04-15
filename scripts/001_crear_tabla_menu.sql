CREATE TABLE `Menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_nombre` varchar(100) DEFAULT NULL,
  `menu_descripcion` varchar(100) DEFAULT NULL,
  `menu_precio` int(10) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;