
<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Menu de jefe</title>
</head>
<body>
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  
  <div class="container">
    <form action= "<?php echo RUTA_URL;?>/Paginas/AgreEmp" >
    <div class="col-12">
         <div class="card">
         <div class="card-header">
                 <label for="Instruccion">Añadir Empleado</label>
                
                
            </div>
            <div class="card-body">
                <b>En esta seccion usted podrá agregar a nuevo personal.</b>
                
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
            </form>  
                
            </div>
         </div>   
        
    </div>
      <form action= "<?php echo RUTA_URL;?>/Paginas/Empleados" >
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                   <label for="Instruccion">Gestión de empleados</label>
                
                
            </div>
            <div class="card-body">
                
                <b>En esta sección usted podra revisar a los empleados, asi como editar la informacion,
                o en el peor de los casos, eliminarlo. </b>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
      </form>
                
            </div>
         </div>
        </div>
    
    
    
  
         </div>
        </div>
      </div>
  
  
  
  
  
  </div>
  </body>