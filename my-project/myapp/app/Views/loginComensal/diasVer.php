<?php session_start();?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <h1> Elige horario</h1>
       <tbody>
         <ul>
		   <?php
          if (($registros)){
          foreach ($registros as $fecha => $registro){
            ?>
            <li><a href="<?php echo site_url('/mesaRestaurante-horasVer/'.$registro[0])?>"><?= $fecha . ' (' . count($registro) . ')'?></a> </li>
            <?php
          }
        } 
        else
            echo 'no hay dias disponibles para esa mesa'
		   ?>
       </ul>
       </tbody>
     </table>
     <div class="row">
				<div class="col-md-12">
					<div class="calendar calendar-first" id="calendar_first">
				    <div class="calendar_header">
				        <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
				         <h2></h2>
				        <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
				    </div>
				    <div class="calendar_weekdays"></div>
				    <div class="calendar_content"></div>
					</div>
				</div>
			</div>
      <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>

  </div>
<div>
</ul>

</div>
<?= $this->endSection() ?>
