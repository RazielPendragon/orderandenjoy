<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR'])) {
      
      $usr =   $_SESSION['USR'];
    ?>
    <p>
       Menus
        <a href="<?php echo site_url('/XXX/')?>">YYY</a>
    </p>
    <?php }else{ ?>
    <p>
        Favor ingrese.
    </p>
    <?php } ?>


<?= $this->endSection() ?>