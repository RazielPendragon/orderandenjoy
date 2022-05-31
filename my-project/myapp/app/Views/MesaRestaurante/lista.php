<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

<div class="d-flex">
        <a href="<?php echo site_url('/reservas-volver/') ?>" class="btn btn-success mb-2">Volver</a>
	</div>
<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/mesaRestaurante-agregarFormulario/') ?>" class="btn btn-success mb-2">Agregar mesa</a>
	</div>
  
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>ID</th>
             <th>N° MESA</th>
             <th>ESTADO MESA</th>
             <th>CAPACIDAD</th>
            <!-- <th>RESTAURANTE</th> (no ocupar por ahora)-->
             <th>ACCION</th>
          </tr>
       </thead>
       <tbody>
		   <?php
				// Primero se revisa que el arreglo "registros" no este vacio (siempre la BD puede devolver NADA)
				// Luego apra cada Concierto (reg  --- por registro) en el listado dibujamos la tablita
				// Brujeria maxima nivel 1: ahcemos link a los ver pero pasando el ID !!!  Ojo que podemos hacerlo igual para modificar y eliminar

				// Recordar que los path de lso links SON los de los Routes no lo de los sistemas operativos

				// Los nombres de lso clases salen de acá
				// https://getbootstrap.com/docs/4.0/components/buttons/
				// Simpre respetar usar el mismo foramto
		   ?>
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <tr>
             <td><?php echo $reg->mesa_id; ?></td>
             <td><?php echo $reg->n_mesa; ?></td>
             <td><?php echo $reg->estado_mesa; ?></td>
             <td><?php echo $reg->capacidad_mesa; ?></td>
             <!--<td><?php echo $reg->restaurante_id; ?></td> (no ocupar por ahora)-->
             <td>
              <a href="<?php echo site_url('/mesaRestaurante-editarFormulario/'.$reg->mesa_id);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo site_url('/mesaRestaurante-eliminarFormulario/'.$reg->mesa_id);?>" class="btn btn-danger btn-sm">Borrar</a>
              <a href="<?php echo site_url('/mesaRestaurante-listaDias/'.$reg->mesa_id);?>" class="btn btn-danger btn-sm">Dias</a>
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
 



