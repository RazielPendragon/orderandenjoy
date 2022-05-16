CREATE TABLE restaurantes.Contacto (
    contacto_id int(11) NOT NULL AUTO_INCREMENT,
	nombre_completo varchar(300) NOT NULL,
	razon_social varchar(300) NOT NULL,
	rut varchar(100) NOT NULL,
	nombre_fantasia varchar(300) NOT NULL,
    correo_contacto varchar(300) NOT NULL,
    cuidad varchar(300) NOT NULL,
    comuna varchar(300) NOT NULL,
    direccion varchar(300) NOT NULL,
	contacto_telefono varchar(300) NOT NULL,
  
  PRIMARY KEY (contacto_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
