estoy agregando 

<a href="<?php echo site_url('/mesaRestaurante-agregarBaseDatos/')?>">Agregar</a>

<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/menu-agregar-continuar') ?>">
      <div class="form-group">
        <label>N° mesa</label>
        <input type="text" name="n° mesa" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Estado mesa</label>
        <input type="text" name="estado" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Capacidad</label>
        <input type="text" name="capacidad" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Dia reserva</label>
        <input type="text" name="dia reserva" class="form-control"/>
      </div>