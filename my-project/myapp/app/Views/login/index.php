<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <p>
       // aqui abajo debe ir donde estara el formulario de menus
        <a href="<?php echo site_url('/MenuView-lista/')?>">Ver Menu</a>
    </p>
    <?php }else{ ?>
    <p>
        Favor ingrese.
    </p>
    <?php } ?>


<?= $this->endSection() ?>