<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/menu-agregar-continuar') ?>">
      <div class="form-group">
        <label>Menu</label>
        <input type="text" name="menu" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" class="form-control"/>
      </div>
      <div class="form-group">
      <input type ="hidden" name= "restaurante" value= "<?= $_SESSION ['USR']->usuario_id?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
      <a href="<?php echo site_url('/menu-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          menu: {
            required: true,
            maxlength: 100
          },
          descripcion: {
            required: true,
            maxlength: 150
          },
          precio: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          menu: {
            required: "El nombre del Menu es obligatorio",
            maxlength: "El nombe del Menu a lo más es de 100 caracteres.",
          },
          descripcion: {
            required: "El nombre de la descripcion es obligatorio",
            maxlength: "La descripcion a lo más es de 150 caracteres.",
          },
          precio: {
            required: "El Precio del Menu es obligatorio",
            maxlength: "El Precio del Menu debe ser entero positivo.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>