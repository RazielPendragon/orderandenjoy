<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="container mt-1 offset-md-3 col-6">
<?= view('/loginComensal/menuPrincipal') ?>
</div>
<div class="container mt-1 offset-md-3 col-6">

<form method="post" id="add_create" name="add_create" action="<?= site_url('mesaRestaurante-diasVer') ?>">
     <table class="table table-bordered" id="users-list">
       <h1>Ingresa la cantidad de personas</h1>
       <div class="form-group">
      <!--icono personas-->
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg>
       <label>Cantidad De Personas:</label>
        <input type="text" name="cantidad" class="form-control col-3" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
     </table>
</form>
  </div>
<?= $this->endSection() ?>