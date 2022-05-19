<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/menu-editar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($menu->id);?>"/>
      <div class="form-group">
        <label>Menu</label>
        <input type="text" name="menu" class="form-control" value="<?php echo($menu->nombre); ?>"/>
      </div>
      <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo($menu->descripcion);?>"/>
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" class="form-control" value="<?php echo($menu->precio);?>"/>
      </div>
      <div class="form-group">
      <input type ="hidden" name= "restaurante" value= "<?= $_SESSION ['USR_R']->id_restaurante?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Editar</button>
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
            maxlength: 100
          },
        },
        messages: {
          menu: {
            required: "El nombre del Menú es obligatorio",
            maxlength: "El nombe del Menú a lo más es de 100 caracteres.",
          },
          descripcion: {
            required: "La Descripcion es obligatoria",
            maxlength: "La Descripcion a lo más es de 150 caracteres.",
          },
          precio: {
            required: "El precio es obligatorio",
            maxlength: "El precio debe ser un entero positivo.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>