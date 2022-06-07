<a href="<?php echo site_url('/mesaRestaurante-cancelarDias/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-eliminarDiasBaseDatos/') ?>">
	  <input type="hidden" name="dia_id" value="<?php echo($mesa->disponibilidad_id);?>"/>
    <input type="hidden" name="id" value="<?php echo($mesa->mesa_id);?>"/>
      <div class="form-group">
        <label>Dia disponible:</label> <?php echo($mesa->dia_reserva); ?>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/mesaRestaurante-cancelarDias/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>