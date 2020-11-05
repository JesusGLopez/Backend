<!DOCTYPE html>
<html lang="en">


<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Agregar Empleado</title>
</head>


<body>
 <p style="text-align: center; font-size: 30px;"><b>Agregar nuevo empleado</b></h3></p>
 <div class="container">
 <div class="card bg-success text-white">
       <div class="card-header bg-dark">
        <a href="<?php echo RUTA_URL;?>/Paginas/VolverJefe" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
    <h3> <?php echo $datos['Mensaje']; ?> </h3>
        <div class="form-row text-center">
           <div class="col-12">
            <label for="Instruccion" style="color: #969696"><h3><small>Complete los campos para agregar al nuevo empleado</small></h3></label>
            <!--Poner el nombre del usuario-->
           </div>
        </div>
       </div>
 <div class="card-body">
 <form action= "<?php echo RUTA_URL;?>/Usuarios/agregar" method="POST">
  <div class="form-group" >
    <label for="Nombre">Nombre Completo</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $datos['Nombre']; ?>" aria-describedby="Nombre" placeholder="Jose Soy Un Ejemplo">
    
    <label for="Curp">Curp</label>
    <input type="text" class="form-control" name="Curp" id="Curp" value="<?php echo $datos['Curp']; ?>" aria-describedby="Curp" placeholder="FEPM890204HASRRN08">
    
    <label for="Rfc">R.F.C</label>
    <input type="text" class="form-control" name="Rfc" id="Rfc" value="<?php echo $datos['Rfc']; ?>" aria-describedby="R.F.C" placeholder="VECJ880326 XXX">
    
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" name="Telefono" id="Telefono"  value="<?php echo $datos['Telefono']; ?>" aria-describedby="Telefono" placeholder="810633456">
    
    <label for="Correo">Correo Electrónico</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="<?php echo $datos['Correo']; ?>" aria-describedby="Correo" placeholder="correoEjemp21@dominio.com">
    
    <label for="NSS">N.S.S</label>
    <small id="Advertencia" style="color: white;">(Número de seguro social)</small>
    <input type="text" class="form-control" name="NSS" id="NSS" value="<?php echo $datos['NSS']; ?>" aria-describedby="NSS" placeholder="555501234">
   
    
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
    <label for="Salario">Salario diario</label>
    <input type="text" class="form-control" id="Salario" name="Salario" value="<?php echo $datos['Salario']; ?>" aria-describedby="Salario" placeholder="250">
    
    <label for="Fecha">Fecha de Ingreso</label>
    <input type="text" class="form-control" id="Fecha" name ="Fecha" value="<?php echo $datos['Fecha']; ?>" aria-describedby="Fecha" placeholder="dd/mm/yyyy">
    
  
  
  </div>
    <div class="card-footer">
     <div class="form-row text-center">
        <div class="col-12">
         <button type="submit" class="btn btn-dark btn-lg">Agregar</button>
        </div>
     </div>
    </div>
   </form>
   </div>
  </div>
</div> 

</body>

</html>
        
    








