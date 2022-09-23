<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand"><?php $comensal =  $_SESSION['USR_C'];?>
<b><?php echo $comensal->NombreCompleto?></b></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/Comensal-home/')?>">Reservar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/Comensal-verReservas/')?>">Mis Reservas</a>
      </li>
    </ul>
  </div>
  <span class="navbar-text">
        <a class="nav-link" href="<?php echo site_url('/Comensal-logout/')?>"><i class="bi bi-box-arrow-right"></i></a>
    </span>
</nav>