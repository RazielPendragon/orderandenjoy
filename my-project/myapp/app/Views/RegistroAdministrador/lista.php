<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<!-- ARREGLAR -->
<form method="post" id="add_create" name="add_create" action="<?= site_url('/Administrador-Registro') ?>">
<h1>¡Registro exitoso!, recuerde enviar datos al restaurante</h1>
<button type="submit" class="btn btn-primary btn-sm">hacer nuevo registro</button>
</form>
</div>

<?= $this->endSection() ?>
