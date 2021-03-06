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
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $datos['Nombre']; ?>" aria-describedby="Nombre" required maxlength="50" required minlength="3" pattern="^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
    
    <label for="Curp">Curp</label>
    <input type="text" class="form-control" id="Curp" name="Curp" value="<?php echo $datos['Curp']; ?>" aria-describedby="Curp" pattern="([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$" title="La Curp debe de contar con 10 dígitos (y MAYÚSCULAS)" required>
    
    <label for="Rfc">R.F.C</label>
    <input type="text" class="form-control" id="Rfc" name="Rfc" value="<?php echo $datos['Rfc']; ?>" aria-describedby="R.F.C" pattern="[A-Z]{4}[0-9]{6}" title="El RFC necesita un formato de 4 letras MAYÚSCULAS, seguido de 6 números" required>
    
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $datos['Telefono']; ?>" aria-describedby="Telefono" pattern="[0-9]{10,10}" title="Número telefónico de 10 dígitos" required>
    
    <label for="Correo">Correo Electronico</label>
    <input type="email" class="form-control" id="Correo" name="Correo" value="<?php echo $datos['Correo']; ?>" aria-describedby="Correo" required>
    
    <label for="NSS">N.S.S</label>
    <small id="Advertencia" style="color: white;">(Número de seguro social)</small>
    <input type="text" class="form-control" id="NSS" name="NSS"  value="<?php echo $datos['NSS']; ?>" aria-describedby="NSS" pattern="[0-9]{11,11}" title="El NSS se conforma por 11 dígitos" required>
    
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
    <input type="text" class="form-control" id="Salario" name="Salario" value="<?php echo $datos['Salario']; ?>" aria-describedby="Salario" required minlength="0" required maxlength="100000000" title="Dígitos Númericos" required>
    
    <label for="Fecha">Fecha de Ingreso</label>
    <input type="text" class="form-control" id="Fecha" name="Fecha" value="<?php echo $datos['Fecha']; ?>" aria-describedby="Fecha" pattern="^([0-9]{4})-([0-9]{2})-([0-9]{2})$" title="La fecha se conforma con un formato así YYYY-MM-DD" required>
    
   </div>
   
 <div class="card-footer">
  <div class="form-row text-center">
   <div class="col-12">
    <button type="submit" class="btn btn-dark btn-lg">Guardar cambios</button>
   </div>
  </div>
 </div

</form>
</div>
</div>
</div>
</body>

</html>
        
    









