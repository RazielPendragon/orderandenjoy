<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
  <?php var_dump($registros);?>
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Encuentra tu Restaurante Preferido</th>
          </tr>
       </thead>
       <tbody>
         
		   <?php
          foreach ($registros as $registro){
            $restaurante = $registro['restaurante'];
            $menus = $registro['menu'];
            ?>
            Restaurante: <?= $restaurante->NombreFantasia?> <li> <a href="<?php echo site_url('/mesaRestaurante-reservar/'.$restaurante->id_restaurante)?>">Reserva aqui</a></li><br/> 
            Menu:
            <?php
            if ($menus) {
              foreach ($menus as $plato) {
                ?>
                  <li><?= $plato->nombre ?>
                  <ul>
                      <li><?= $plato->descripcion ?></li>
                      <li><?= $plato->precio ?></li>
                  </ul>
                  </li>
                <?php
              }
            }
          }
		   ?>
       </tbody>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>