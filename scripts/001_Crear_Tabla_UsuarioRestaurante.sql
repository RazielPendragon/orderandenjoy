use restaurantes;
CREATE TABLE `UsuarioRestaurante`(
  usuario_restaurante_id INT(11) NOT NULL AUTO_INCREMENT,
  usuario_restaurante_nombre_fantasia VARCHAR(300) NOT NULL,
  usuario_restaurante_ciudad VARCHAR(300) NOT NULL,
  usuario_restaurante_comuna VARCHAR(300) NOT NULL,
  usuario_restaurante_direccion VARCHAR(300) NOT NULL,
  usuario_restaurante_telefono VARCHAR(300) NOT NULL,
  usuario_restaurante_correo VARCHAR(100) NOT NULL,
  usuario_restaurante_clave VARCHAR(300) NOT NULL,
  usuario_restaurante_tiempo INT(11) NOT NULL,
  PRIMARY KEY (usuario_restaurante_id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO restaurantes.UsuarioRestaurante
(usuario_restaurante_nombre_fantasia, usuario_restaurante_ciudad, usuario_restaurante_comuna, usuario_restaurante_direccion, usuario_restaurante_telefono, usuario_restaurante_correo, usuario_restaurante_clave, usuario_restaurante_tiempo)
VALUES('la piccola italia', 'santiago ', 'providencia', 'av. ricardo lyon 227', '927380263', 'piccola_italia@orderandenjoy.com', 'enjoy123', 30),
('los buenos muchachos', 'santiago ', 'santiago centro', 'av. ricardo cumming1031', '937290475', 'buenos_muchachos@orderandenjoy.com', 'enjoy123', 60);