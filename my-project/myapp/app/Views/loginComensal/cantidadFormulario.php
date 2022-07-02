<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="container mt-5">

<form method="post" id="add_create" name="add_create" action="<?= site_url('mesaRestaurante-diasVer') ?>">
     <table class="table table-bordered" id="users-list">
       <h1>Ingresa la cantidad de personas</h1>
       <div class="form-group">
       <label>Cantidad De Personas:</label>
        <input type="text" name="cantidad" class="form-control col-3" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ACCEDER</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
     </table>
</form>
  </div>
<?= $this->endSection() ?>