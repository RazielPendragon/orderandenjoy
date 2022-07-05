<?= $this->extend('/login/formaUsuario') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-1 offset-md-3 col-6">
  <h1 class="text-center">¡Dejanos tus datos y te contactaremos!</h1>
  <h4>Datos del Restaurante:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistroContactoCrud/agregar02Continuar') ?>">
    <div class="form-group">
        <label>Nombre completo de contacto</label>
        <input type="text" name="NombreCompleto" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Razon social</label>
        <input type="text" name="RazonSocial" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese rut:</label>
        <input type="text" name="ContactoRut" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Nombre fantasia (restaurante)</label>
        <input type="text" name="NombreFantasia" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ContactoCuidad" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Comuna</label>
        <input type="text" name="ContactoComuna" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="ContactoDireccion" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Correo electrónico</label>
        <input type="email" name="correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese su teléfono:</label>
        <input type="phone" name="telefono" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>
      <a href="<?php echo site_url('/registro-cancelarContacto/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          nombre: {
            required: true,
            maxlength: 100
          },
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
          nombre: {
            required: "El Nombre es obligatorio",
            maxlength: "El Nombre a lo maximo de 100 caracteres.",
          },
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