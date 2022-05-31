<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Selecciona tu mesa</th>
          </tr>
       </thead>
       <tbody>
         <ul>
		   <?php
          foreach ($registros as $registro){
            $mesa = $registro['mesa'];
            $dia = $registro['dia'];
            ?>
            Mesas: <?= $mesa->dia_reserva?> <li> <a href="<?php echo site_url('/xxxxxxx/')?>">Seleccionar</a></li><br/> 
            Dias:
            <?php
            if ($dia) {}
              foreach ($dia as $diaR) {
                ?>
                  <li><?= $diaR->dia_reserva?>

                  </li>
                <?php
              }
            }
		   ?>
       </ul>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>