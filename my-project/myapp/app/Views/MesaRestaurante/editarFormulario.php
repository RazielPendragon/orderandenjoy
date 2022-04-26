<!-- estoy editando
<a href="<?php echo site_url('/mesaRestaurante-editarFormulario/')?>">editar</a> -->

<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-editarContinuar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($mesa->id);?>"/>
      <div class="form-group">
        <label>N° mesa</label>
        <input type="text" name="mesa" class="form-control" value="<?php echo($mesa->nombre); ?>"/>
      </div>
      <div class="form-group">
        <label>Estado mesa</label>
        <input type="text" name="estado" class="form-control" value="<?php echo($mesa->estado);?>"/>
      </div>
      <div class="form-group">
        <label>Capacidad</label>
        <input type="text" name="capacidad" class="form-control" value="<?php echo($mesa->capacidad);?>"/>
      </div>
      <div class="form-group">
        <label>Dia reserva</label>
        <input type="text" name="reserva" class="form-control" value="<?php echo($mesa->reserva);?>"/>
      </div>

      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Editar</button>
      <a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          concierto: {
            required: true,
            maxlength: 100
          },
          ubicacion: {
            required: true,
            maxlength: 150
          },
        },
        messages: {
          concierto: {
            required: "El nombre del conciorto es obligatorio",
            maxlength: "El nombe del concierto a lo más es de 100 caracteres.",
          },
          ubicacion: {
            required: "El nombre de la ubicación es obligatorio",
            maxlength: "La ubcicación a lo más es de 150 caracteres.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>