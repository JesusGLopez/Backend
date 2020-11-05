<?php
class Auths extends Controller{
    public function __construct(){
        
        $this->authModel=$this->model('Auth');
    }
    public function index(){
        $datos=[
                'titulo'=>'',
                ];
    
    $this->view('paginas/auth/login',$datos);
    }
    
public function login(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos=[
            'Usuario'=> trim($_POST['Usuario']),
            'Contraseña' => trim($_POST['Contraseña']),
        ];
        $usuario=$this->authModel->buscarUsuario($datos); 
    if($usuario){
        session_start();
        if($usuario['Tipo']=='admin'){
        //$foto=base64_encode($usuario['foto']);
        $datos=[
            
          'titulo'=>'Bienvenido:',
          'usuario'=> $usuario['Nombre']
          //'foto'=>$foto
        ];
        
        $this->view('paginas/Menu/MenuJefe',$datos);
        }
        else{
             $this->view('paginas/Menu/MenuConta',$datos);
        }
        } else {
        $datos=[
            'titulo' => 'Usuario no existe',];
        $this->view('paginas/dashboard',$datos);
        }
    }
}


public function logout(){
    session_start();
    session_unset();
    session_destroy();
    $datos=[
            'titulo'=> 'He salido del sistema',
        ];
    $this->view('paginas/dashboard',$datos);
    
}
public function SignUp(){
    $this->view('paginas/dashboard',$datos);
}
}
?>