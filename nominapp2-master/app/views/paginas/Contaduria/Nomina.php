<?php
ini_set('display_errors',0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Nomina</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Nómina</b></h3></p>
 <div class="container">
  
  <div class="card bg-success text-white">
   
   <div class="card-header bg-dark">
    <div class="form-row text-center">
      <a href="<?php echo RUTA_URL;?>/Paginas/Volver" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
            
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Complete los campos para crear una nueva nómina</small></h4></label>
     </div>
    </div>
   </div>
   
   <div class="card-body">
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="IDEmpl">ID</label>
      <input type="text" class="form-control" id="IDEMpl" placeholder="ID del empleado">
     </div>
     <div class="form-group col-md-6">
      <br>
      <label for="Buscar">Buscar:</label>
      <button type="button" class="btn btn-dark">Buscar</button>
     </div>
    </div>
  
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="Nombre">Nombre del empleado</label>
      <input type="text" class="form-control" id="R.F.C" placeholder="">
     </div>
     <div class="form-group col-md-4"></div>
     <div class="form-group col-md-4">
      <br>
      <label for="Regimen">Regimen del trabajador: Sueldos</label>
     </div>
    </div>
       <div class="form-row">
     <div class="form-group col-md-6">
      <label for="Telefono">Teléfono</label>
       <input type="text" class="form-control" id="Telefono" placeholder="">
     </div>
     
     <div class="form-group col-md-6">
      <label for="Correo">Correo</label>
      <input type="text" class="form-control" id="Correo" placeholder="">
     </div>
     </div>
    <div class="form-row">
     <div class="form-group col-md-3">
      <label for="R.F.C">R.F.C</label>
      <input type="text" class="form-control" id="R.F.C" placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="Curp">Curp</label>
      <input type="text" class="form-control" id="Curp" placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="N.S.S">N.S.S</label>
      <input type="text" class="form-control" id="N.S.S" placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="Salario">Pago con: efectivo</label>
     </div>
    </div>
    
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="Puesto">Puesto</label>
       <input type="text" class="form-control" id="Puesto" placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="Turno">Turno</label>
      <input type="text" class="form-control" id="Turno" placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="Salario">Salario Diario</label>
      <input type="text" class="form-control" id="Salario" placeholder="">
     </div>
    </div>
    
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="SalarioMes">Salario Mensual</label>
       <input type="text" class="form-control" id="SalarioMes" placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="Fecha">Fecha Ingreso</label>
      <input type="text" class="form-control" id="Fecha" placeholder="">
     </div>
      <div class="form-group col-md-4">
       <label for="AT">Años Trabajando</label>
        <input type="text" Class="form-control" id="Años">
      </div>
     

    
 <!-----------percep y deducc---------------------------------->
    <div class="container">
  <div class="row align-items-start bg-dark">
    <div class="col">
      <label for="Percepciones">Percepciones:</label>
    </div>
    <div class="col">
      
    </div>
    <div class="col">
      <label for="Deducciones">Deducciones:</label>
    </div>
  </div>
  <!-------Checks percepciones-------->
  <div class="row align-items-center">
   
   
    <div class="col">
     <div class="row align-items-center">
      <div class="col">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">Bono de asistencia </label>
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">Bono de puntualidad </label>
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">Vacaciones </label>
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
      <div class="row align-items-center">
      <div class="col">
       <input class="form-check-input" type="checkbox" id="gridCheck">
       <label class="form-check-label" for="gridCheck">Prima vacacional </label>
      </div>
     </div>
       <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
       <div class="row align-items-center">
     
     </div>
    </div>
    <!-------para estilo:v---->
    <div class="col">
      
    </div>
    <!----deducciones------->
    <div class="col">
      <div class="row align-items-center">
      <div class="col">
       <label for="ISR">ISR</label>
       <input type="text" class="form-control" id="ISR" placeholder="">
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <label for="IMSS">IMSS</label>
       <input type="text" class="form-control" id="IMSS" placeholder="">
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <label for="Fondo">Fondo de vivienda</label>
       <input type="text" class="form-control" id="Fondo" placeholder="">
       <div class="row">
        <label></label>
       </div>
      </div>
     </div>
    </div>
  </div>
  <!------estilo :B--->
  <div class="row align-items-end">
    <label></label>
  </div>
</div>
<!------------------------------------------------->    
        
   <div class="form-row">
    <div class="form-group col-md-10 text-center ">
     <label></label>
    </div>
    <div class="form-group col-md-2 text-center ">
     
    </div>
   </div>
   
   <div class="form-row">
    <div class="form-group col-md-10 text-center ">
     
    </div>
    <div class="form-group col-md-2 text-center">
     
    </div>
   </div>
  </div>
   </div>
  <div class="card-footer text-center">
   <button type="submit" class="btn btn-dark">Guardar</button>
   <button type="submit" class="btn btn-dark ">Imprimir</button>
  </div>
  


</body>

</html>



