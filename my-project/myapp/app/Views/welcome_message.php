<?= $this->extend('login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="/imagenes/logo.png" width="200" height="47" class="d-inline-block align-top" alt=""/>

  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
      <?php if(isset($_SESSION['USR_C'])) {
      
      $comensal =   $_SESSION['USR_C'];
    ?>

         <a class="nav-link" href="<?php echo site_url('/Comensal-logout/')?>">LogOut</a>
    
    <?php }else{ 
          if(isset($_SESSION['USR_R'])){
            $restaurant = $_SESSION['USR_R'];
    ?>
           

            <a class="nav-link" href="<?php echo site_url('/login-logout/')?>">LogOut</a>

          
            <?php

          }else{
      
    ?>
  
        <a class="nav-link" href="<?php echo site_url('/Comensal-Login/')?>">LogIn Comensal</a>

    <?php }} ?>
      </li>
    </ul>
  </div>
</nav>
<img src="/imagenes/index.jpg"/>
<div>
LANDING PAGE AAAAAAAAAAAA
	
 <img src="/images/icono reloj.png" alt="">
	<div class="video-container">
<!--  <ifram e width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe> -->
 </div>
        
	
	
	
	
</div>
<?= $this->endSection() ?>