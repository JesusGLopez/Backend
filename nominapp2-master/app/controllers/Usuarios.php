<?php class Usuarios extends Controller{
    public function __construct(){
        
        $this->usuarioModel=$this->model('Usuario');
    }
    public function index(){
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        $datos=[
            'usuarios'=>$usuarios  
        ];
       $this->view('paginas/Usuarios/usuarios',$datos);
    }
    
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $usuarios=$this->usuarioModel->obtenerUsuario();
            $datos=[
              'Id'=> $usuarios['idE']+1, 
              'Nombre'=> trim($_POST['Nombre']),
              'Curp'=> trim($_POST['Curp']),
              'Rfc'=> trim($_POST['Rfc']),
              'Telefono'=> trim($_POST['Telefono']),
              'Correo'=> trim($_POST['Correo']),
              'NSS'=> (int)trim($_POST['NSS']),
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
              'Salario'=> (Double)trim($_POST['Salario']),
              'Fecha'=> trim($_POST['Fecha']),
              'SalMen' => (Double)trim($_POST['Salario'])*30.4
                
            ];
            if($this->usuarioModel->agregarUsuario($datos)){
            $datos=['Mensaje'=> 'Se ha registrado correctamente'];
            $this->view('paginas/Jefe/Agregar',$datos);
            }else{
                
            }
        }
        else{
            $datos=[
                
                 'Nombre'=> '',
                 'Curp'=> '',
                 'Rfc'=> '',
                 'Telefono'=> '',
                 'Correo'=> '',
                 'NSS'=> '', 
                 'Rol'=> '',
                 'Turno'=> '',
                 'Salario'=> '',
                 'Fechas'=> '',
                 'Mensaje'=> '',

                
            ];
            $this->view('paginas/Jefe/Agregar',$datos);
            
        }
        
    }
   
   
    public function editar($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['Id'] ),
              'Nombre'=> trim($_POST['Nombre']),
              'Curp'=> trim($_POST['Curp']),
              'Rfc'=> trim($_POST['Rfc']),
              'Telefono'=> trim($_POST['Telefono']),
              'Correo'=> trim($_POST['Correo']),
              'NSS'=> (int)trim($_POST['NSS']),
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
              'Salario'=> (Double)trim($_POST['Salario']),
              'Fecha'=> trim($_POST['Fecha']),
              'SalMen' => (Double)trim($_POST['Salario'])*30.4,
              'Mensaje'=> 'Se ha modificado correctamente'
                
            ];
            if($this->usuarioModel->ModificarUsuario($datos)){
           
            $this->view('paginas/Jefe/Editar',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        
            $datos=[
                 'Id' =>$usuario ['idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Curp'=> $usuario['Curp'],
                 'Rfc'=> $usuario['RFC'],
                 'Telefono'=> $usuario['Telefono'],
                 'Correo'=> $usuario['Correo'],
                 'NSS'=> $usuario['NSS'], 
                 'Rol'=> $usuario['Puesto_idPuesto'],
                 'Turno'=> $usuario['Turno_idTurno'],
                 'Salario'=> $usuario['Salario'],
                 'Fecha'=> $usuario['FechaIng'],
                 'Mensaje'=> '',

                
            ];
            $this->view('paginas/Jefe/Editar',$datos);
            
        }
    }
    
    public function eliminar($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['IDEmp'] ),
              'Nombre'=> trim($_POST['Nombre']), 
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
             
                
            ];
            if($this->usuarioModel->EliminarUsuario($datos)){
           $datos=[
              'Id'=> '',
              'Nombre'=> '', 
              'Rol'=> '',
              'Turno'=> '',
              'Mensaje'=> 'Se ha eliminado con exito',
             
                
            ];
            $this->view('paginas/Jefe/Eliminar',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        
            $datos=[
                 'Id' =>$usuario ['idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Rol'=> $usuario['Puesto_idPuesto'],
                 'Turno'=> $usuario['Turno_idTurno'],
                 'Mensaje'=> '',
                
            ];
            $this->view('paginas/Jefe/Eliminar',$datos);
            
        }
    }
    
   
   
   
     public function Busqueda(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuarios=$this->usuarioModel->obtenerEsp($_POST['ID']);
        $datos=[
            'Empleado'=>$usuarios  
        ];
       $this->view('paginas/Jefe/Empleados',$datos);
        }
    }
   
   
   
   
   
   
   
   
   
   
   
   
    
    public function toPdf(){
        
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        foreach($usuarios as $key=>$usuario){
            $registros[]=[
                         'id'=> $usuario['id'],
                         'rfc'=> $usuario['rfc'],
                         'nombre'=> $usuario['nombre'],
                         'correo'=> $usuario['correo'],
                         'direccion'=> $usuario['direccion'],
                         'telefono'=> $usuario['telefono'],
                         'foto'=> base64_encode($usuario['foto'])
                         ];
        }
    $datos=['usuarios'=>$registros, ];
        $this->view('paginas/usuarios/impresion',$datos);
        
    }
    
}

?>