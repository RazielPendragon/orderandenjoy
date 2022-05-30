/* Table 'UsuarioComensal' */
CREATE TABLE restaurantes.UsuarioComensal(
  usuario_comensal_id INT(11) NOT NULL,
  usuario_comensal_nombre_completo VARCHAR(300) NOT NULL,
  usuario_comensal_correo VARCHAR(100) NOT NULL,
  usuario_comensal_clave VARCHAR(300) NOT NULL,
  usuario_comensal_telefono VARCHAR(300) NOT NULL,
  PRIMARY KEY(usuario_comensal_id)
);