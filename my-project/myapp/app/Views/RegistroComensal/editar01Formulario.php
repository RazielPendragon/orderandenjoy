<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container mt-5">
  <h1 class="text-center">Actualizar datos de Usuario</h1>
  <h4>Actualizar datos de Usuario:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistroComensalCrud/agregar02Continuar') ?>">
    <div class="form-group">
        <label>Ingrese nuevo Nombre Usuario</label>
        <input type="text" name="NombreCompleto" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nuevo correo electrónico</label>
        <input type="email" name="correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cree una nueva contraseña:</label>
        <input type="password" name="clave" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nuevo teléfono:</label>
        <input type="phone" name="telefono" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
      <a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>
      if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          correo: {
            required: true,
            maxlength: 100
          },
          clave: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          correo: {
            required: "El correo es obligatorio",
            maxlength: "El correo a lo maximo de 100 caracteres.",
          },
          clave: {
            required: "La contraseña es obligatoria",
            maxlength: "La contraseña a lo más es de 150 caracteres.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>