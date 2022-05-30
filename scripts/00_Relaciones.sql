use restaurantes;
/* Relation 'UsuarioRestaurante_Mesa' */
ALTER TABLE `Mesa`
  ADD CONSTRAINT `UsuarioRestaurante_Mesa`
    FOREIGN KEY (restaurante_id)
      REFERENCES `UsuarioRestaurante` (usuario_restaurante_id);

/* Relation 'Mesa_DisponibilidadMesa' */
ALTER TABLE `DisponibilidadMesa`
  ADD CONSTRAINT `Mesa_DisponibilidadMesa`
    FOREIGN KEY (mesa_id) REFERENCES `Mesa` (mesa_id);

/* Relation 'UsuarioComensal_Reserva' */
ALTER TABLE `Reserva`
  ADD CONSTRAINT `UsuarioComensal_Reserva`
    FOREIGN KEY (comensal_id) REFERENCES `UsuarioComensal` (usuario_comensal_id)
  ;

/* Relation 'UsuarioRestaurante_Menu' */
ALTER TABLE `Menu`
  ADD CONSTRAINT `UsuarioRestaurante_Menu`
    FOREIGN KEY (id_usuarios)
      REFERENCES `UsuarioRestaurante` (usuario_restaurante_id);

/* Relation 'Menu_MenuReserva' */
ALTER TABLE `MenuReserva`
  ADD CONSTRAINT `Menu_MenuReserva`
    FOREIGN KEY (menu_id) REFERENCES `Menu` (menu_id);

/* Relation 'Reserva_MenuReserva' */
ALTER TABLE `MenuReserva`
  ADD CONSTRAINT `Reserva_MenuReserva`
    FOREIGN KEY (reserva_id) REFERENCES `Reserva` (reserva_id);

/* Relation 'DisponibilidadMesa_DisponibilidadHora' */
ALTER TABLE `DisponibilidadHora`
  ADD CONSTRAINT `DisponibilidadMesa_DisponibilidadHora`
    FOREIGN KEY (disponibilidad_id)
      REFERENCES `DisponibilidadMesa` (disponibilidad_id);

/* Relation 'DisponibilidadHora_Reserva' */
ALTER TABLE `Reserva`
  ADD CONSTRAINT `DisponibilidadHora_Reserva`
    FOREIGN KEY (hora_id) REFERENCES `DisponibilidadHora` (hora_id);
