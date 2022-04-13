<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/concierto-agregar') ?>" class="btn btn-success mb-2">Agegar Concierto</a>
	</div>

<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>ID</th>
             <th>CONCIERTO</th>
             <th>UBICACION</th>
             <th>Action</th>
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
             <td><?php echo $reg->id; ?></td>
             <td><?php echo $reg->nombre; ?></td>
             <td><?php echo $reg->ubicacion; ?></td>
             <td>
              <a href="<?php echo site_url('/concierto-ver/'.$reg->id);?>" class="btn btn-info btn-sm">Ver</a>
              <a href="<?php echo site_url('/concierto-editar/'.$reg->id);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo site_url('/concierto-eliminar/'.$reg->id);?>" class="btn btn-danger btn-sm">Borrar</a>
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
 