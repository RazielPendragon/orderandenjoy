<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<form method="post" id="add_create" name="add_create" action="<?= site_url('/Comensal-Login') ?>">
<h1>¡Registro exitoso!, recuerda enviar los datos al Restaurante</h1>
<button type="submit" class="btn btn-primary btn-sm">Crear otro regustro</button>
</form>
</div>

<?= $this->endSection() ?>
