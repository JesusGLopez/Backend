<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Asistencia</title>
</head>

<body>
    <p style="text-align: center; font-size: 30px;"><b>Asistencias del dia.</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                  <a href="#" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
    
                <label for="Instruccion " style="color: #969696"><h4><small>Vista de las asistencias de hoy</small></h4></label>
            </div>
           <form action= "#" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                </div>
           </form> 
                <div class="row">
                    <label></label>
                </div>
           
            <table class="table table-stripped">
            <thead class="bg-dark">
                <tr class="row">
                    <th class="col-md-4">Id del empleado</th>
                    <th class="col-md-4">Nombre</th>
                    <th class="col-md-4">Turno</th>                   
                </tr>
            </thead>
            
            <tbody class="bg-white text-dark">
                        <?php# foreach($datos['Asistencia'] as $usuario):?>
                <!--Enseguida del row va lo del ngFor para que se llene la tabla-->
                <tr class="row">
                <td class="col-md-4"> </td>
                <td class="col-md-4"> </td>
                <td class="col-md-4"> </td>
                </tr>
                    
                    </tbody>
                 </table>
             </div>
            </div>
          </div>
</body>
</html>