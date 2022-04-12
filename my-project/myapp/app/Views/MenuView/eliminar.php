<a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/concierto-elimnar-continuar/') ?>">
	  <input type="hidden" name="id" value="<?php echo($concierto->id);?>"/>
      <div class="form-group">
        <label>Concierto</label> <?php echo($concierto->nombre); ?>
      </div>
      <div class="form-group">
        <label>Ubicación</label><?php echo($concierto->ubicacion);?>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>