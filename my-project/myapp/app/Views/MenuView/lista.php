<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<div class="d-flex">
        <a href="<?php echo site_url('/menu-volver/')?>" class="btn btn-info mb-2">Volver</a>
	</div>
<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/menu-agregar') ?>" class="btn btn-info mb-2">Agegar Menú</a>
	</div>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>ID</th>
             <th>MENU</th>
             <th>DESCRIPCION</th>
             <th>PRECIO</th>
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
             <td><?php echo $reg->descripcion; ?></td>
             <td><?php echo $reg->precio; ?></td>
             <td>
              <a href="<?php echo site_url('/menu-ver/'.$reg->id);?>" class="btn btn-info btn-sm">Ver</a>
              <a href="<?php echo site_url('/menu-editar/'.$reg->id);?>" class="btn btn-info btn-sm">Editar</a>
              <a href="<?php echo site_url('/menu-eliminar/'.$reg->id);?>" class="btn btn-info btn-sm">Borrar</a>
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
 
