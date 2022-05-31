<?php session_start(); ?>
<?= $this->extend('/loginRestaurante/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR_R'])) {
      
      $usr =   $_SESSION['USR_R'];
    ?>
    <h1>Restaurantes</h1>
    <ul>
        <li> <a href="<?php echo site_url('/menu-lista/')?>">Crear Menu</a></li>
        <li><a href="<?php echo site_url('/mesaRestaurante-lista/')?>">Crear Mesa</a></li>
 
 
 
 
 
    <?php }else{ ?>
   
   
   
    <?php } ?>


<?= $this->endSection() ?>