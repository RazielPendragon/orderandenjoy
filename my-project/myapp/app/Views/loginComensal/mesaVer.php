<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <h1> Elige tu mesa favorita</h1>
       <tbody>
         <ul>
		   <?php
          if (($registros)){
          foreach ($registros as $registro){
            ?>
            <li><a href="<?php echo site_url('/mesaRestaurante-diasVer/'.$registro->mesa)?>">Mesa <?= $registro->nombre_mesa ?></a> (Capacidad <?= $registro->capacidad_mesa ?> personas)</li>
            <?php
          }
        }
        else
        echo 'no hay mesas disponibles'
       ?>
       </ul>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>