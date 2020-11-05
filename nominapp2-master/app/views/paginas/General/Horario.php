<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Horario</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Horario</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/VolverJefe" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
    
    <div class="col-md-6 col">
    </div>
    <div class="col-md-4 col">
     
    </div>
    <div class="col-md-4 col">
     <p></p>
    </div>
   </div>
   
   <div class="card-body">
     <form>
  <div class="form-group">
   <label for="IDTur">Numero Turno</label>
   <input type="text" class="form-control" id="IDTur" name="IDTur" readonly >
   
   <label for="Turno">Turno</label>
   <input type="text" class="form-control" id="Turno" name="Turno" readonly aria-describedby="Turno">
   
   <label for="Hora1">Hora de entrada</label>
   <input type="text" class="form-control" id="Hora1" name="Hora1" readonly  aria-describedby="Hora">
   
   <label for="Hora de salida">Hora de salida</label>
   <input type="text" class="form-control" id="Hora2" name="Hora2" readonly aria-describedby="Hora">
   </form>
   </div>
   
   <div class="card-footer">
    <div class="form-row text-center">
     
    </div>
   </div>
 
   </div>
  </div>
 </div>

</body>

</html>
    
 
 
   