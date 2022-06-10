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
            <li><a href="<?php echo site_url('/xxxxxxx/')?>">Hora <?= $registro->hora ?></a> </li>
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