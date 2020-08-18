<?php
require("Conexion.php");
 
class ConectorDB extends Conexion 
{
    private $conexion;
 
    public function __construct(){
        $this->conexion = parent::conectar(); 
        return $this->conexion;                                     
    }
 
    public function consultarBD($consulta, $valores = array()){  
        $resultado = false;
 
        if($statement = $this->conexion->prepare($consulta)){  
            if(preg_match_all("/(:\w+)/", $consulta, $campo, PREG_PATTERN_ORDER)){ 
                $campo = array_pop($campo); 
                foreach($campo as $parametro){
                    $statement->bindValue($parametro, $valores[substr($parametro,1)]);
                }
            }
            try {
                if (!$statement->execute()) { 
                    print_r($statement->errorInfo()); 
                }
                $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
                $lastInsertId = $this->conexion->lastInsertId(); 
                $statement->closeCursor();
            }
            catch(PDOException $e){
                echo "Error de ejecución: \n";
                print_r($e->getMessage());
            }  
        }
         
        $resultado = $resultado == null ? $lastInsertId : $resultado;

        return $resultado;
        $this->conexion = null; 
    } 
}


?>