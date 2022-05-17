<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
 
  <div class="container mt-5">
  <h1>Bienvenido Restaurante</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('Restaurante-Validar/') ?>">
      <div class="form-group">
        <label>Ingrese su correo electrónico:</label>
        <input type="email" name="el_correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingresa tu contraseña:</label>
        <input type="password" name="la_clave" class="form-control" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ACCEDER</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
      <ul>
      <li> <a href="<?php echo site_url('/Contacto-Registro/')?>">¡¡¡Contactanos!!!</a></li>
      </ul>
  </div>

  <?= $this->endSection() ?>