<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>




<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Encuentra tu Restaurante Preferido</th>
          </tr>
       </thead>
       <tbody>
       
		   <?php
				// Primero se revisa que el arreglo "registros" no este vacio (siempre la BD puede devolver NADA)
				// Luego apra cada Concierto (reg  --- por registro) en el listado dibujamos la tablita
				// Brujeria maxima nivel 1: ahcemos link a los ver pero pasando el ID !!!  Ojo que podemos hacerlo igual para modificar y eliminar

				// Recordar que los path de lso links SON los de los Routes no lo de los sistemas operativos

				// Los nombres de lso clases salen de acá
				// https://getbootstrap.com/docs/4.0/components/buttons/
				// Simpre respetar usar el mismo foramto
		   ?>
       </tbody>
     </table>
  </div>

<div>
</ul>
   <h1>Comensales</h1>
   <ul>
       <li>Reservar mesa</li>
   </ul>
</div>

  <script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>