<?php
class Usuario{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function obtenerUsuario(){
    $resultados=$this->db->queryOne("select max(idEmpleado) as 'idE' from Empleado");
        return $resultados;
        
    }
    
  public function agregarUsuario($datos){
        $bind=array(
              $datos['Id'],
              $datos['Nombre'],
              $datos['Curp'],
              $datos['Rfc'],
              $datos['Telefono'],
              $datos['Correo'],
              $datos['Rol'],
              $datos['Turno'],
              $datos['Salario'],
              $datos['Fecha'],
              $datos['NSS'],
              $datos['SalMen']

                    );
        $sql="INSERT INTO Empleado (idEmpleado, Nombre, Curp, RFC, Telefono, Correo, Puesto_idPuesto, Turno_idTurno, Salario, FechaIng, NSS, SalarioMes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
 
 
    }
    public function ModificarUsuario($datos){
        $bind=array(
              
              $datos['Nombre'],
              $datos['Curp'],
              $datos['Rfc'],
              $datos['Telefono'],
              $datos['Correo'],
              $datos['Rol'],
              $datos['Turno'],
              $datos['Salario'],
              $datos['Fecha'],
              $datos['NSS'],
              $datos['SalMen'],
            $datos['Id']
                    );
        var_dump($bind);
       $sql="UPDATE Empleado SET Nombre = ?, Curp = ?, RFC = ?, Telefono = ?, Correo = ?, Puesto_idPuesto = ?, Turno_idTurno = ?, Salario = ?, FechaIng = ?, NSS = ?, SalarioMes = ? WHERE idEmpleado = ? " ;
        $resultado =$this->db->queryOne($sql,$bind);
        return (is_array($resultado))?true:false;
 
    }

public function obtenerUsuarioId($id){
        $bind=array($id);
        $sql="SELECT * FROM Empleado WHERE idEmpleado = ?";
        $renglon =$this->db->queryOne($sql,$bind);
        

        return $renglon;

    }

    public function EliminarUsuario($datos){
        $bind=array($datos['Id']);
        $sql="DELETE FROM Empleado WHERE idEmpleado = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    
    
    
    
    
  public function ObtenerTabla(){
    $resultados=$this->db->query("select Empleado.idEmpleado, Empleado.Nombre, Puesto.Puesto, Turno.Turno from Empleado, Puesto, Turno where Puesto.idPuesto = Empleado.Puesto_idPuesto and Turno.idTurno = Empleado.Turno_idTurno  ");
        return $resultados;
        
    }

 
 
  public function obtenerEsp($datos){
    $bind=array($datos);
    $resultados=$this->db->query("select Empleado.idEmpleado, Empleado.Nombre, Puesto.Puesto, Turno.Turno from Empleado, Puesto, Turno where Puesto.idPuesto = Empleado.Puesto_idPuesto and Turno.idTurno = Empleado.Turno_idTurno and Empleado.idEmpleado = ?", $bind);
        return $resultados;
    
        
    }























public function Horario(){
   
    $resultados=$this->db->queryOne("select * from Turno where idTurno = 1");
        return $resultados;
    
        
    }

public function Horario2(){
   
    $resultados=$this->db->queryOne("select * from Turno where idTurno = 2");
        return $resultados;
    
        
    }


}

?>