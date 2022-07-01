<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
<form method="post" id="add_create" name="add_create" action="<?= site_url('mesaRestaurante-diasVer') ?>">
     <table class="table table-bordered" id="users-list">
       <h1>Ingresa la cantidad de personas</h1>
       <div class="form-group">
       <div class="col-sm-10">
       Cantidad De Personas:
       </div>
       <div class="col-sm">
        <input type="text" name="cantidad" class="form-control" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ACCEDER</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
      </div>
     </table>
  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>