<?php

class Articulos{


    public  function nuevoarticulo($idcategoria,$nombre,$descripcion,$codigobarras)
    {
        $consulta =  "INSERT INTO articulos (`idcategoria_productos`, `nombre`, `descripcion`, `codigobarras`, `estado`) 
                      VALUES ('$idcategoria','$nombre','$descripcion','$codigobarras', 1)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }


    
}




 ?>