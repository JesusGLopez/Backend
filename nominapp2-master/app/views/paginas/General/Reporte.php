

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Reporte</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Reportes</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/Volver" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
    <div class="col-md-6 col">
    </div>
    <div class="col-md-4 col">
     
    </div>
    <div class="col-md-4 col">
     <p></p>
    </div>
   </div>
   
   <div class="card-body">
     <div class="row">
      <div class="col-sm-6">
       <label for="Nombre" style="font-size: 20px;">Buscar Id:</label>
        <input type="text" class="form-control" id="ID" placeholder="">
       <button type="submit" class="btn btn-dark">Buscar</button>
      
     </div>
     <div class="row">
       <label></label>
     </div>
    
    
   </div>
   <!---si no les gusta la tabla, devuelvanla adrentro del row de arriba-->
    <table class="table-striped">
     <thead class="bg-dark">
      <tr class="row">
       <th class="col-sm-4">ID de nómina</th>
       <th class="col-sm-4">Fecha</th>
       <th class="col-sm-4">Ver nómina</th>
      </tr>
     </thead>
     <tbody class="bg-white text-dark">
      <!--Enseguida del row va lo del ngFor para que se llene la tabla-->
      <tr class="row">
       <td class="col-sm-4"><!--Llamado del campo aqui--></td>
       <td class="col-sm-4"><!--Llamado del campo aqui--></td>
       <td class="col-md-4"><a class="btn btn-sm btn-secondary"href="<?php echo RUTA_URL;?>/Paginas/VerNomina"><i class="fa fa-eye"></i></a></td>
      </tr>
      <tr class="row">
       <td class="col-sm-4"><!--Llamado del campo aqui--></td>
       <td class="col-sm-4"><!--Llamado del campo aqui--></td>
       <td class="col-md-4"><a class="btn btn-sm btn-secondary"href="#"><i class="fa fa-eye"></i></a></td>
      </tr>
     </tbody>
    </table>
   
   <div class="card-footer">
    <div class="form-row text-center">
     
    </div>
   </div>
  </div>
 </div>
 </div>

</body>
 
    
 
 
 
  
   
