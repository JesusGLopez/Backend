

<?php
//ini_set('error_reporting',0);
//session_destroy();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>


  <p style="text-align: center; font-size: 30px;"><b>Iniciar Sesión</b></h3></p>
  <div class="container">
    <div class="card bg-success text-white">
      <div class="card header bg-dark">
        <br>
        <br>
      </div>
      <div class="card-body">
        <form action= "<?php echo RUTA_URL;?>/auths/login" method="POST">
          <div class="form-group">
            <label for="Usuario" style="font-size: 20px;">Nombre de usuario</label>
            <input type="Usuario" class="form-control" id="Usuario" name="Usuario" aria-describedby="Usuario">
            <small id="Advertencia" class="form-text text-white text-center bg-dark">Ingrese su nombre de usuario y contraseña asignados</small>
          </div>
          <div class="form-group">
            <label for="contraseña" style="font-size: 20px;">Contraseña</label>
            <input type="password" class="form-control" id="Contraseña" name="Contraseña">
            <small id="Advertencia" class="form-text text-muted text-center bg-dark"></small>
          </div>
          
          <button type="submit" class="btn btn-dark">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
  
  
