<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<!-- ARREGLAR -->
<form method="post" id="add_create" name="add_create" action="<?= site_url('/Contacto-Registro') ?>">
<h1>¡Registro exitoso!, espera a que te contactemos</h1>
<button type="submit" class="btn btn-primary btn-sm">volver</button>
</form>
</div>

<?= $this->endSection() ?>
