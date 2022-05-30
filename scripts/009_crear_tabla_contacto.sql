CREATE TABLE restaurantes.UsuarioContacto (
usuario_contacto_id int(11) NOT NULL AUTO_INCREMENT,
usuario_contacto_nombre_completo varchar(300) NOT NULL,
usuario_contacto_razon_social varchar(300) NOT NULL,
usuario_contacto_rut varchar(300) NOT NULL,
usuario_contacto_nombre_fantasia varchar(300) NOT NULL,
usuario_contacto_cuidad varchar(300) NOT NULL,
usuario_contacto_comuna varchar(300) NOT NULL,
usuario_contacto_direccion varchar(300) NOT NULL,
usuario_contacto_correo varchar(100) NOT NULL,
usuario_contacto_telefono varchar(300) NOT NULL,
  
  PRIMARY KEY (usuario_contacto_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;


--PRIMERO CREAR LOS DATOS DEL CONTACTO PARA LUEGO CREAR AL USUARIO RESTAURANTE-->
INSERT INTO restaurantes.UsuarioContacto
(usuario_contacto_nombre_completo, usuario_contacto_razon_social, usuario_contacto_nombre_fantasia, usuario_contacto_cuidad, usuario_contacto_comuna, usuario_contacto_direccion, usuario_contacto_correo, usuario_contacto_rut, usuario_contacto_telefono)
VALUES('camila sofia soto tapia', 'seluk S.a', 'la piccola italia', 'santiago', 'Providencia', 'Av. Ricardo Lyon 227', 'camila_soto@piccolaprovidencia.com', '76.075.975-9', '927380263'),('kevin alfredo castillo valenzuela', 'comercializadora y distribuidora vivanco S A', 'los buenos muchachos', 'santiago', 'santiago centro', 'Av. Ricardo Cumming 1031', 'kevin_castillo@muchachoscumming.com', '96.562.640-9', '937290475');


url administrador oculto
http://localhost:8000/index.php/Restaurante-Registro/