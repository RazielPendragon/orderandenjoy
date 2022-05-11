<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<?php if(isset($_SESSION['USR_R'])) {
      
      $usr =   $_SESSION['USR_R'];
    ?>
    <h1>Restaurantes</h1>
    <ul>
        <li> <a href="<?php echo site_url('/menu-lista/')?>">Ver Menu</a></li>
        <li><a href="<?php echo site_url('/mesaRestaurante-lista/')?>">Ver Reservas</a></li>
 
 
 
 
 
    <?php }else{ ?>
   
   
   
    <?php } ?>


<?= $this->endSection() ?>