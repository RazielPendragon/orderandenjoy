<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 
  <div class="container mt-5">
  	<?php if($concierto): ?>
      <div class="form-group">
     	<label>Recital</label>
		<?php echo($concierto->nombre); ?>	 
      </div>
      <div class="form-group">
        <label>Ubicacion</label>
		<?php echo($concierto->ubicacion); ?>	 
	  </div>
      <div class="form-group">
		<a href="<?php echo site_url('/concierto-editar/'.$concierto->id);?>" class="btn btn-primary btn-sm">Editar</a>
		<a href="<?php echo site_url('/concierto-eliminar/'.$concierto->id);?>" class="btn btn-danger btn-sm">Borrar</a>
		<a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>