<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <tbody>
       <h1>Encuentra tu Restaurante Preferido</h1>
		   <?php
          foreach ($registros as $restaurante){
            ?>
            Restaurante: <?= $restaurante->NombreFantasia?> <li> <a href="<?php echo site_url('/mesaRestaurante-cantidadPersonas/'.$restaurante->id_restaurante)?>">Reserva aqui</a></li><br/> 

            <?php
              
            
          }
		   ?>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>