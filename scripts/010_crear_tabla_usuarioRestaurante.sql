CREATE TABLE restaurantes.UsuarioRestaurante (
	usuario_restaurante_id int(11) NOT NULL AUTO_INCREMENT,
	usuario_restaurante_nombre_fantasia varchar(300) NOT NULL,
  usuario_restaurante_ciudad varchar(300) NOT NULL,
  usuario_restaurante_comuna varchar(300) NOT NULL,
  usuario_restaurante_direccion varchar(300) NOT NULL,
  usuario_restaurante_telefono varchar(300) NOT NULL,
	usuario_restaurante_correo varchar(100) NOT NULL,
	usuario_restaurante_clave varchar(300) NOT NULL,
	
  
  PRIMARY KEY (usuario_restaurante_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--PRIMERO HACER EL INSERT INTO DE CONTACTO Y LUEGO DEL RESTAURANTE--

INSERT INTO restaurantes.UsuarioRestaurante
(usuario_restaurante_nombre_fantasia, usuario_restaurante_ciudad, usuario_restaurante_comuna, usuario_restaurante_direccion, usuario_restaurante_telefono, usuario_restaurante_correo, usuario_restaurante_clave)
VALUES('la piccola italia', 'santiago ', 'providencia', 'av. ricardo lyon 227', '927380263', 'piccola_italia@orderandenjoy.com', 'enjoy123'),
('los buenos muchachos', 'santiago ', 'santiago centro', 'av. ricardo cumming1031', '937290475', 'buenos_muchachos@orderandenjoy.com', 'muchachos321');



url administrador oculto
http://localhost:8000/index.php/Restaurante-Registro/
