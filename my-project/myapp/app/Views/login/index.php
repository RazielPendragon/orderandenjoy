<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <p>
       Formularios de menus
        <a href="<?php echo site_url('/MenuView-lista/')?>">Ver Menu</a>
    </p>
    <p>
        Reservas del dia
        <a href="<?php echo site_url('/reservas-verReservaMesas/')?>">Ver Reservas</a>
    </p>
    
    <?php }else{ ?>
    <p>
        Favor ingrese.
    </p>
    <?php } ?>


<?= $this->endSection() ?>