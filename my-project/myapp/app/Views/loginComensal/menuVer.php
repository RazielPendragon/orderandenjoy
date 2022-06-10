<?php session_start();?>
<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1 class="text-center">Resumen De Reserva :3</h1>
  <h4>Datos de Usuario:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/RegistroComensalCrud/agregar02Continuar') ?>">
    <input type= "hidden" name= "ComensalId" value = "<?= $_SESSION['USR_C']->id_comensal?>"/>
    <input type= "hidden" name= "RestauranteId" value = "<?= $_SESSION['restaurante']->id_restaurante?>"/>
    <input type= "hidden" name= "MesaId" value = "<?= $_SESSION['mesa']->mesa?>"/>
    <input type= "hidden" name= "DiaId" value = "<?= $_SESSION['dia']->disponibilidad_id?>"/>
    <input type= "hidden" name= "HoraId" value = "<?= $_SESSION['hora']->hora_id?>"/>
        <div class="form-group">
        <label>Restaurante:</label>
        <input type="text" name="restaurante" value="<?= $_SESSION['restaurante']->NombreFantasia?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label>Mesa:</label>
        <input type="text" name="mesa" value= "<?= $_SESSION['mesa']->nombre_mesa?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label>Día:</label>
        <input type="text" name="dia" value="<?= $_SESSION['dia']->dia_reserva?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label>Hora:</label>
        <input type="text" name="hora" value = "<?= $_SESSION['hora']->hora?>" class="form-control" readonly/>
      </div>
      <div class="form-group">
        <label>Cantidad De Personas:</label>
        <input type="text" name="cantidad" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>
      <a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          cantidad: {
            required: true,
            maxlength: 100
          },
        },
        messages: {
          cantidad: {
            required: "La cantidad de personas es obligatoria",
            maxlength: "El Nombre a lo maximo de 100 caracteres.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>