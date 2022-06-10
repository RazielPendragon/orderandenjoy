<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <h1> Elige horario</h1>
       <tbody>
         <ul>
		   <?php
          if (($registros)){
          foreach ($registros as $registro){
            ?>
            <li><a href="<?php echo site_url('/mesaRestaurante-horasVer/'.$registro->disponibilidad_id)?>">Dias <?= $registro->dia_reserva ?></a> </li>
            <?php
          }
        } 
        else
            echo 'no hay dias disponibles para esa mesa'
		   ?>
       </ul>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>