<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
      
       <h4>Reserva Lista</h4>

       <label> <?= $_SESSION['USR_C']->NombreCompleto?> has reservado en el restaurante <?= $_SESSION['restaurante']->NombreFantasia?> el dia <?= $_SESSION['dia']->dia_reserva?> a las <?= $_SESSION['hora']->hora?> horas en la mesa <?= $_SESSION['mesa']->nombre_mesa?> con los menus
       <?php
        foreach($registros as $menu) {
          ?>
          <Li><?= $menu['menu']->menu_nombre?>( <?= $menu['menuReserva']->menu_cantidad?>) </Li>
          <?php
          } 
          ?> </label>

      
<?= $this->endSection() ?>