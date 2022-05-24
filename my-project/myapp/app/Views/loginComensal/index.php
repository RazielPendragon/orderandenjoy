<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Encuentra tu Restaurante Preferido</th>
          </tr>
       </thead>
       <tbody>
         <ul>
		   <?php
          foreach ($registros as $registro){
            $restaurante = $registro['restaurante'];
            $menus = $registro['menu'];
            ?>
            Restaurante: <?= $restaurante->NombreFantasia?><br/>
            Menu:
            <?php
            if ($menus) {}
              foreach ($menus as $plato) {
                ?>
                  <li><?= $plato->nombre ?>
                  <ul><li><?= $plato->descripcion ?></li></ul>
                  <ul><li><?= $plato->precio ?></li></ul>
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
   <h1>Comensales</h1>
   <ul>
       <li>Reservar mesa</li>
   </ul>
</div>
<?= $this->endSection() ?>