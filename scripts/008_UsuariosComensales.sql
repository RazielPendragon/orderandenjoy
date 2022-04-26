CREATE TABLE restaurantes.UsuarioComensal (
	usuario_comensal_id int(11) NOT NULL AUTO_INCREMENT,
	usuario_comensal_nombre_completo varchar(300) NOT NULL,
	usuario_comensal_correo varchar(100) NOT NULL,
	usuario_comensal_clave varchar(300) NOT NULL,
	usuario_comensal_telefono varchar(300) NOT NULL,
  
  PRIMARY KEY (usuario_comensal_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;


Insertar En la Tabla UsuarioComensal
INSERT INTO restaurantes.UsuarioComensal
(usuario_comensal_nombre_completo, usuario_comensal_correo, usuario_comensal_clave, usuario_comensal_telefono)
VALUES('Sebastian Ponce Torres', 'ponce.sebastian.6a@gmail.com', 'seba1408', '991354285');
