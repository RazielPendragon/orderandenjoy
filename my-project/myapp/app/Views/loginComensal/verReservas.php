<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="container mt-1 offset-md-3 col-6">
<?= view('/loginComensal/menuPrincipal') ?>
</div>
<div class="container mt-1 offset-md-3 col-6">
     <table class="table table-bordered" id="users-list">
       <h1> Mis Reservas</h1>
       <tbody>
         <ul>
		   <?php
          if (($registros)){
          foreach ($registros as $registro){
            ?>
            <li> <?= $registro -> reserva_id ?></li>
            <?php
          }
        } 
        else
            echo 'No tienes ninguna reserva'
		   ?>
       </ul>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>