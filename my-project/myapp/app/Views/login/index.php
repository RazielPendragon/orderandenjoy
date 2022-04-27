<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <h1>Restaurantes</h1>
    <ul>
        <li> <a href="<?php echo site_url('/menu-lista/')?>">Ver Menu</a></li>
        <li><a href="<?php echo site_url('/mesaRestaurante-lista/')?>">Ver Reservas</a></li>
    </ul>
    <h1>Comensales</h1>
    <ul>
        <li>Reservar mesa</li>
    </ul>
    <?php }else{ ?>
    <p>
        Favor ingrese.
    </p>
    <?php } ?>


<?= $this->endSection() ?>