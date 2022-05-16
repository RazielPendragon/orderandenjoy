<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1 class="text-center">Bienvenido Administrador</h1>
  <h4>Crear usuario restaurante:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistoAdministradorController/agregarRestauranteBaseDato') ?>">
    <div class="form-group">
        <label>Ingrese el nombre del restaurante</label>
        <input type="text" name="nombreCompletoRestaurante" class="form-control" required/>
      </div>
      <div class="form-group"> 
        <label>Cuidad:</label>
        <input type="text" name="cuidadRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Comuna:</label>
        <input type="text" name="comunaRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Direccion:</label>
        <input type="text" name="direccionRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Crear correo electronico</label>
        <input type="email" name="correoRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Crear contraseña:</label>
        <input type="password" name="contraseñaRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">ENVIAR</button> <!--aqui debe enviar datos a base datos-->
      <a href="<?php echo site_url('/xxxxxxxxxxxx/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
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
          cuidad: {
            required: true,
            maxlength: 100
          },
          comuna: {
            required: true,
            maxlength: 100
          },
          direccion: {
            required: true,
            maxlength: 100
          },
          correo: {
            required: true,
            maxlength: 150
          },
          clave: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          nombre: {
            required: "El nombre es obligatorio",
            maxlength: "El nombre a lo maximo de 100 caracteres.",
          },
          ciudad: {
            required: "La ciudad es obligatoria",
            maxlength: "La ciudad a lo más es de 150 caracteres.",
          },
          comuna: {
            required: "La comuna es obligatoria",
            maxlength: "La comuna a lo maximo de 100 caracteres.",
          },
          direccion: {
            required: "La Direccion es obligatoria",
            maxlength: "La Direccion a lo maximo de 100 caracteres.",
          },
          telefono: {
            required: "El telefono es obligatorio",
            maxlength: "El telefono a lo más es de 150 caracteres.",
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