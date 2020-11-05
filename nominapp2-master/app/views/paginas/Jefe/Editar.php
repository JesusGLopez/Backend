<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Editar Información</title>
</head>
<body>
 <p style="text-align: center; font-size: 30px;"><b>Editar empleado</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/Empleados" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
      <h3> <?php echo $datos['Mensaje']; ?> </h3>
    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Edite los campos necesarios del empleado</small></h4></label>
     </div>
    </div>
   </div>
   
 <div class="card-body">
  <form action= "<?php echo RUTA_URL;?>/Usuarios/editar/<?php echo $datos['Id']; ?>" method="POST">
   <div class="form-group">
    <label for="IDEmp">ID del empleado</label>
    <input type="text" class="form-control" name ="Id" id="Id" value="<?php echo $datos['Id']; ?>" readonly aria-describedby="Id" placeholder="1">
    
    <label for="Nombre">Nombre completo</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $datos['Nombre']; ?>" aria-describedby="Nombre">
    
    <label for="Curp">Curp</label>
    <input type="text" class="form-control" id="Curp" name="Curp" value="<?php echo $datos['Curp']; ?>" aria-describedby="Curp" >
    
    <label for="Rfc">R.F.C</label>
    <input type="text" class="form-control" id="Rfc" name="Rfc" value="<?php echo $datos['Rfc']; ?>" aria-describedby="R.F.C" >
    
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $datos['Telefono']; ?>" aria-describedby="Telefono" >
    
    <label for="Correo">Correo Electronico</label>
    <input type="email" class="form-control" id="Correo" name="Correo" value="<?php echo $datos['Correo']; ?>" aria-describedby="Correo" >
    
    <label for="NSS">N.S.S</label>
    <small id="Advertencia" style="color: white;">(Número de seguro social)</small>
    <input type="text" class="form-control" id="NSS" name="NSS"  value="<?php echo $datos['NSS']; ?>" aria-describedby="NSS" >
    
    <label for="Puesto">Puesto</label>
    <select id="Rol" name="Rol" value="<?php echo $datos['Rol']; ?>" class="form-control">
        <option selected value="1">Operador</option>
        <option value="2">Cocedores</option>
        <option value="3">Intendencia</option>
        <option value="4">Empaquetado</option>
        <option value="5">Repartidor</option>
    </select>
    
    
    
      <label for="Turno">Turno</label>
     <select id="Turno" name="Turno" value="<?php echo $datos['Turno']; ?>" class="form-control">
        <option selected value="1">Matutino</option>
        <option value="2">Despertino</option>
        </select>
    <label for="Salario">Salario</label>
    <input type="text" class="form-control" id="Salario" name="Salario" value="<?php echo $datos['Salario']; ?>" aria-describedby="Salario" >
    
    <label for="Fecha">Fecha de Ingreso</label>
    <input type="text" class="form-control" id="Fecha" name="Fecha" value="<?php echo $datos['Fecha']; ?>" aria-describedby="Fecha">
    
   </div>
   
 <div class="card-footer">
  <div class="form-row text-center">
   <div class="col-12">
    <button type="submit" class="btn btn-dark btn-lg">Guardar</button>
   </div>
  </div>
 </div

</form>
</div>
</div>
</div>
</body>

</html>
        
    









