<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>

<div class="d-flex">
        <a href="<?php echo site_url('/reservas-volver/') ?>" class="btn btn-success mb-2">Volver</a>
	</div>
<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/mesaRestaurante-agregarHoras/'.$disponibilidad_id) ?>" class="btn btn-success mb-2">Agregar Horas</a>
	</div>
  
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>ID</th>
             <th>HORAS DISPONIBLES</th>
             <th>ACCION</th>
          </tr>
       </thead>
       <tbody>
		   <?php

		   ?>
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <tr>
             <td><?php echo $reg->hora_id; ?></td>
             <td><?php echo $reg->hora; ?></td>
             <td>
              <a href="<?php echo site_url('/xxxxxxxxxxxxx/'.$reg->mesa_id);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo site_url('/xxxxxxxxxx/'.$reg->mesa_id);?>" class="btn btn-danger btn-sm">Borrar</a>
              </td>
      
          </tr>
        
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
 
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>
 

