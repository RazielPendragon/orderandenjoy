CREATE TABLE restaurantes.usuarios (
	usuario_id INT auto_increment NOT NULL,
	usuario_correo varchar(100) NOT NULL,
	usuario_nombre_completo varchar(300) NOT NULL,
	CONSTRAINT usuarios_PK PRIMARY KEY (usuario_id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;