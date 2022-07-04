<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">

</head>
<body  style="background-image: url('/imagenes/fondo.jpg');">

  
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<div class="d-flex justify-content-end">
    <?php if(isset($_SESSION['USR_C'])) {
      
      $comensal =   $_SESSION['USR_C'];
       ?>
       <p>
        <b><?php echo $comensal->NombreCompleto?></b>
        <a class="nav-link" href="<?php echo site_url('/Comensal-logout/')?>">LogOut</a>
       </p>
       <?php 
    }
    else{ 
      if(isset($_SESSION['USR_R'])){
        $restaurant = $_SESSION['USR_R'];
        ?>
        <p>
          <b><?php echo $restaurant->nombre_completo?></b>
        </p>
        <?php
      }
      else{
        ?>
        <?php 
      }
    }?>
</div>

<!--div class="container mt-4"-->

    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
        <?= $this->renderSection('contenido') ?>

<!--/div-->


</body>
</html>