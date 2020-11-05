<?php
class Paginas extends Controller{
    
    public function __construct(){
        
    }
    public function index(){
        $datos=[
        'titulo'=>'Bienvenidos: '
        ];
        $this->view('paginas/dashboard',$datos);
        
    }
    
    public function Nomina(){
        $this->view('paginas/Contaduria/Nomina');
    }
    
    public function Reporte(){
        $this->view('paginas/General/Reporte');
    }
     public function VerNomina(){
        $this->view('paginas/General/VerNomina');
        
    }
  
    public function Volver(){
            $this->view('paginas/Menu/MenuConta');    
    }
    
    
    
    
    
    
     public function VolverJefe(){
            $this->view('paginas/Menu/MenuJefe');    
    }
    
    
    
    
    
     public function Empleados(){
         
            $this->usuarioModel=$this->model('Usuario');
            $usuarios = $this->usuarioModel->ObtenerTabla();
            
            $datos=[
            'Empleado'=>$usuarios
        ];
            
        
           $this->view('paginas/Jefe/Empleados',$datos);    
    }
    
    
    
    
    
    
    
      public function AgreEmp(){
            $this->view('paginas/Jefe/Agregar');    
    }
     public function EdiEmp($idEmpleado){
            $this->view('paginas/Jefe/Editar');
            
            
            
    }
     public function EliEmp($idEmpleado){
            $this->view('paginas/Jefe/Eliminar');
            
            
            
    }
     public function Horario(){
     
     $this->usuarioModel=$this->model('Usuario');
     
     $horario=$this->usuarioModel->Horario();
     $horario2=$this->usuarioModel->Horario2();
     $datos=['Horario'=>$horario, 'Horario2'=>$horario2];
     
            $this->view('paginas/Jefe/Horario',$datos);
            
    }
    
    
    
    
    
    
    
    
     public function Asistencia(){
            $this->view('paginas/Asistencia/VerAsistencias');            
    }
    
      public function AsistenciaTod(){
            $this->view('paginas/Asistencia/VerAsistenciaTod');            
    }
    
}

?>