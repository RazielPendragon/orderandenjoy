<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1 class="text-center">Dejanos tus datos y te contactanos</h1>
  <h4>Datos restaurante:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistroContactoRController/agregarContactoBaseDato') ?>">
    <div class="form-group">
        <label>Ingrese el nombre de su restaurante</label>
        <input type="text" name="nombreCompleto" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Razon social</label>
        <input type="text" name="razonSocial" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>RUT</label>
        <input type="text" name="rutRestaurante" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Nombre fantasia</label>
        <input type="text" name="nombreFantasia" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese su correo electrónico de contacto</label>
        <input type="email" name="correoContacto" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cuidad:</label>
        <input type="text" name="cuidad" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Comuna:</label>
        <input type="text" name="comuna" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Direccion:</label>
        <input type="text" name="direccion" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Telefono:</label>
        <input type="phone" name="contactoTelefono" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">ENVIAR</button> <!--aqui debe enviar datos a base datos-->
      <a href="<?php echo site_url('/registroContacto-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
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
          razon: {
            required: true,
            maxlength: 100
          },
          rut: {
            required: true,
            maxlength: 100
          },
          fantasia: {
            required: true,
            maxlength: 100
          },
          correo: {
            required: true,
            maxlength: 150
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
          telefono: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          nombre: {
            required: "El nombre es obligatorio",
            maxlength: "El nombre a lo maximo de 100 caracteres.",
          },
          razon: {
            required: "La razon social es obligatoria",
            maxlength: "La razon socual a lo maximo de 100 caracteres.",
          },
          rut: {
            required: "El rut es obligatorio",
            maxlength: "El rut a lo más es de 150 caracteres.",
          },
          fantasia: {
            required: "El nombre de  fantasia es obligatorio",
            maxlength: "El Nombre a lo maximo de 100 caracteres.",
          },
          correo: {
            required: "El correo es obligatorio",
            maxlength: "El correo a lo maximo de 100 caracteres.",
          },
          ciudad: {
            required: "La ciudad es obligatoria",
            maxlength: "La ciudad a lo más es de 150 caracteres.",
          }  
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
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>