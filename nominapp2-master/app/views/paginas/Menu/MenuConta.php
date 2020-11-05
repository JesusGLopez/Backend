<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Menu Contador</title>
</head>
  <div class="container">
   <form action= "<?php echo RUTA_URL;?>/Paginas/Nomina" >
    <div class="col-12">
         <div class="card">
         <div class="card-header">
                 <label for="Instruccion">Generar Nomina</label>
                
                
            </div>
            <div class="card-body">
                
                 <b>En esta sección podrá crear la nomina del empleado.</b>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
           </form>
            </div>
         </div>   
        
    </div>
      <form action= "<?php echo RUTA_URL;?>/Paginas/Reporte" >
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                   <label for="Instruccion">Gestion de Nominas</label>
                
                
            </div>
            <div class="card-body">
                
                <b>En esta sección podrá Visualizar las nominas, asi como modificar o eliminar alguna nomina.</b>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
          </form>   
                
            </div>
         </div>
        </div>
    
    
    
     
      </div>
  
  
  
  
  
  </div>