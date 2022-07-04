<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>

<div class="container mt-5"> 
  <div class="container mt-5 offset-md-3 col-6" >
  <h1>Accede a tu cuenta</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('Comensal-Validar/') ?>">
      <div class="form-group">
      <!--abajo icono persona-->
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg>
        <label>Ingrese su correo electrónico:</label>
        <input type="email" name="el_correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <!--abajo icono candado-->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        </svg>
        <label>Ingresa tu contraseña:</label>
        <input type="password" name="la_clave" class="form-control" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ACCEDER</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
      <ul>
      <li> <a href="<?php echo site_url('/Comensal-Registro/')?>">¿No tienes una cuenta? Registrate!</a></li>
      </ul>
    </div>
</div>
  <?= $this->endSection() ?>
