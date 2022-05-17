CREATE TABLE restaurantes.UsuarioContacto (
usuario_contacto_id int(11) NOT NULL AUTO_INCREMENT,
usuario_contacto_nombre_completo varchar(300) NOT NULL,
usuario_contacto_razon_social varchar(300) NOT NULL,
usuario_contacto_nombre_fantasia varchar(300) NOT NULL,
usuario_contacto_cuidad varchar(300) NOT NULL,
usuario_contacto_comuna varchar(300) NOT NULL,
usuario_contacto_direccion varchar(300) NOT NULL,
usuario_contacto_correo varchar(100) NOT NULL,
usuario_contacto_clave varchar(300) NOT NULL,
usuario_contacto_telefono varchar(300) NOT NULL,
  
  PRIMARY KEY (usuario_contacto_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

