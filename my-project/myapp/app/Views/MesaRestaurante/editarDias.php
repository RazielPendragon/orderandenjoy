<?php session_start(); ?>

<?= $this->extend('formaStandar') ?>
<?= $this->extend('/loginRestaurante/formausuario') ?>
<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/mesaRestaurante-editarDiasBaseDatos') ?>">
    <input type="hidden" name="id" value="<?php echo($mesa->disponibilidad_id);?>"/>
      <div class="form-group">
        <label>Dia reserva</label>
        <input type="text" name="dia_reserva" class="form-control" value="<?php echo($mesa->dia_reserva); ?>"/>
      </div>
      <div class="form-group">
      <input type ="hidden" name= "mesa_id" value= "<?= $_SESSION ['USR_R']->mesa_id?>"> 
      <button type="submit" class="btn btn-primary btn-sm">Editar</button>
      <a href="<?php echo site_url('/mesaRestaurante-cancelarDias/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
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
        messages: {
            dia_reserva: {
            required: "El dia de la mesa es obligatorio",
            maxlength: "El dia de la mesa a lo más es de 100 caracteres.",
 
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>