<a href="<?php echo site_url('/meSA-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-eliminarBaseDatos/') ?>">
	  <input type="hidden" name="id" value="<?php echo($mesa->mesa_id);?>"/>
      <div class="form-group">
        <label>N° mesa:</label> <?php echo($mesa->nombre_mesa); ?>
      </div>
      <div class="form-group">
        <label>Estado Mesa:</label><?php echo($mesa->estado_mesa);?>
      </div>
      <div class="form-group">
        <label>Capacidad:</label><?php echo($mesa->capacidad_mesa);?>
      </div>
      <div class="form-group">
        <label>Dia Reserva:</label><?php echo($mesa->dia_reserva);?>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/mesa-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>