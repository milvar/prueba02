<?php

class CategoriaProducto{


    public function Categoria($nombre,$descripcion){

        $consulta =  "INSERT INTO `categoria_productos` (`nombre`, `descripcion`, `estado`) VALUES ('$nombre', '$descripcion',1)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;


    }

  

   


    


    
}




 ?>