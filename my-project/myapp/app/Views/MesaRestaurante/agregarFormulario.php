estoy agregando 

<a href="<?php echo site_url('/mesaRestaurante-agragarBaseDatos/')?>">Agregar</a>

<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/menuRestaurante-agregarBaseDatos-continuar') ?>">
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
      <!--arreglar direcciones de botones-->
      <div class="form-group">
      <input type ="hidden" name= "restaurante" value= "<?= $_SESSION ['USR']->usuario_id?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
      <a href="<?php echo site_url('/mesa-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
      <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          n° mesa: {
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
          dia reserva: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          n° mesa: {
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
          dia reserva: {
            required: "El dia de la reserva es obligatorio",
            maxlength: "El dia de la reserva debe ser entero positivo.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>