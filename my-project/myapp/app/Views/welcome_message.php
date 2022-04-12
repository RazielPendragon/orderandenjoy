<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
			<h1> Simulacion login</h1>
			<ul>
			<li><a href="<?php echo site_url('/login/') ?>">seleccionar usuarios</a> </li>
			<li><a href="<?php echo site_url('/concierto-lista/') ?>">CRUD restaurantes</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>