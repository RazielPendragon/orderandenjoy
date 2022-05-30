<?php session_start(); ?>

<?= $this->extend('formaStandar') ?>
<?= $this->extend('/loginRestaurante/formausuario') ?>
<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-editarBaseDatos') ?>">
    <input type="hidden" name="id" value="<?php echo($mesa->mesa_id);?>"/>
      <div class="form-group">
        <label>N° mesa</label>
        <input type="text" name="n_mesa" class="form-control" value="<?php echo($mesa->nombre_mesa); ?>"/>
      </div>
      <div class="form-group">
        <label>Estado mesa</label>
        <input type="text" name="estado" class="form-control" value="<?php echo($mesa->estado_mesa);?>"/>
      </div>
      <div class="form-group">
        <label>Capacidad</label>
        <input type="text" name="capacidad" class="form-control" value="<?php echo($mesa->capacidad_mesa);?>"/>
      </div>
      <div class="form-group">
      <input type ="hidden" name= "restaurante" value= "<?= $_SESSION ['USR_R']->id_restaurante?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Editar</button>
      <a href="<?php echo site_url('/mesaRestaurante-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>

if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          n_mesa: {
            required: true,
            maxlength: 100
          },
          estado: {
            required: true,
            maxlength: 150
          },
          capacidad: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          n_mesa: {
            required: "El numero de la mesa es obligatorio",
            maxlength: "El numero de la mesa a lo más es de 100 caracteres.",
          },
          estado: {
            required: "El estado de la mesa es obligatorio",
            maxlength: "El estado de la mesa a lo más es de 150 caracteres.",
          },
          capacidad: {
            required: "La capacidad de la mesa es obligatorio",
            maxlength: "La capacidad de la mesa debe ser entero positivo.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>