<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->extend('/loginRestaurante/formausuario') ?>
<?= $this->section('contenido') ?>

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-diasBaseDatos-continuar') ?>">
      <div class="form-group">
        <label>DIAS DISPONIBLES</label>
        <input type="text" name="dia_reserva" class="form-control"/>
      </div>
      <div class="form-group">
      <input type ="hidden" name= "mesa_id" value= "<?= $mesa_id?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
      <a href="<?php echo site_url('/mesaRestaurante-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
    <!-- ARREGLAR BOTON CANCELAR -->
      </div>
    </form>
  </div>
      <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
            dia_reserva: {
            required: true,
            maxlength: 100
          },

        },
        messages: {
          dias disponibles: {
            required: "El dia de la mesa es obligatorio",
            maxlength: "El dia de la mesa a lo más es de 100 caracteres.",
          },
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>