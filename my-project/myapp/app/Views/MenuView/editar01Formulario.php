<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/concierto-editar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($concierto->id);?>"/>
      <div class="form-group">
        <label>Concierto</label>
        <input type="text" name="concierto" class="form-control" value="<?php echo($concierto->nombre); ?>"/>
      </div>
      <div class="form-group">
        <label>Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" value="<?php echo($concierto->ubicacion);?>"/>
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