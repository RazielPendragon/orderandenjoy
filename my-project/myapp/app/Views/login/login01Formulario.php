<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
    <ul>
          <?php if($registros): ?>
            <form action="/login-login01Validar/" method="POST">
            <select name="pk">
            <?php foreach($registros as $reg): ?>
            <option value="<?= $reg->usuario_id ?>"><?= $reg->usuario_nombre_completo ?></option>
            <?php endforeach; ?>
            </select>
            <input type='submit' value='login'/>
            </form>   
         <?php endif; ?>
    </ul>
  </div>

<?= $this->endSection() ?>