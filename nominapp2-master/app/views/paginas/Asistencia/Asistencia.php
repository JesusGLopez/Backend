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
    <p style="text-align: center; font-size: 30px;"><b>Asistencia</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                <div class="form-row text-center">
                    <div class="col-12">
                        <label for="Instruccion" style="color: #969696"><h4><small>Confirme su asitencia ingresando su ID</small></h4></label>
                    </div>
                </div>
            </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="Id">ID del empleado</label>
                <input type="text" class="form-control" id="Nombre" aria-describedby="Nombre" placeholder="1">
            </div>
        </form>
    </div>
        
    <div class="card-footer">
        <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-dark">Registrar asistencia</button>
                <!--este boton cambiara si ya registro su asistencia-->
                <button type="submit" class="btn btn-dark">Registrar salida</button>
            </div>
        </div>
    </div>
    </div>
 </div>
 </div>
 </div>
</body>

</html>
        
    



