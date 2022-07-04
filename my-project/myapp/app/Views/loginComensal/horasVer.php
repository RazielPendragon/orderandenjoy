<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="container mt-1 offset-md-3 col-6">
     <table class="table table-bordered" id="users-list">
       <h1> Elige horario</h1>
       <tbody>
         <ul>
		   <?php
          if (($registros)){
          foreach ($registros as $registro){
            ?>
            <li><a href="<?php echo site_url('/mesaRestaurante-menuVer/'.$registro -> hora_id)?>">Hora <?= $registro->hora ?></a> </li>
            <?php
          }
        } 
        else
            echo 'no hay horas disponibles para ese dia'
		   ?>
       </ul>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>