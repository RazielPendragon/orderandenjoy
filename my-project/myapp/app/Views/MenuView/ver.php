<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
 
  <div class="container mt-5">
  	<?php if($menu): ?>
      <div class="form-group">
     	<label>Menu:</label>
		<?php echo($menu->nombre); ?>	 
      </div>
      <div class="form-group">
        <label>Descripcion:</label>
		<?php echo($menu->descripcion); ?>	 
	  </div>
	  <div class="form-group">
        <label>Precio:</label>
		<?php echo($menu->precio); ?>	 
	  </div>
      <div class="form-group">
		<a href="<?php echo site_url('/menu-editar/'.$menu->id);?>" class="btn btn-primary btn-sm">Editar</a>
		<a href="<?php echo site_url('/menu-eliminar/'.$menu->id);?>" class="btn btn-danger btn-sm">Borrar</a>
		<a href="<?php echo site_url('/menu-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/menu-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>