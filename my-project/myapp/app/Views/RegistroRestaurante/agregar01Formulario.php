
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1 class="text-center">Bienvenido Administrador</h1>
  <h4>Ingrese datos Restaurante:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistroRestauranteCrud/agregar02Continuar') ?>">
    <div class="form-group">
        <label>Ingrese el nombre de fantasia</label>
        <input type="text" name="NombreFantasia" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese ciudad del local</label>
        <input type="text" name="RestauranteCiudad" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese comuna del local</label>
        <input type="text" name="RestauranteComuna" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese direccion del local</label>
        <input type="text" name="RestauranteDireccion" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese el teléfono:</label>
        <input type="phone" name="telefono" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cree correo electronico</label>
        <input type="email" name="correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cree una contraseña:</label>
        <input type="password" name="clave" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>

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