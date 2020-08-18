<?php

class Inventario{


    public  function consultainventario($idarticulo,$ciudad)
    {
        $consulta =  "SELECT  Cantidad from `inventario` 
                     WHERE `idarticulos`= $idarticulo AND `ciudad` = $ciudad";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

    public  function actualizacantidad($idarticulo,$ciudad,$Cantidad)
    {
        $consulta =  "UPDATE `inventario` SET `Cantidad`= Cantidad - $Cantidad
                      WHERE `idarticulos`= $idarticulo AND ciudad = $ciudad";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }


     public  function actualizarinventario($idarticulo,$ciudad,$Cantidad,$precio)
    {
        $consulta =  "UPDATE `inventario` SET `Cantidad`='$Cantidad', `precio`='$precio' 
                      WHERE `idarticulos`='$idarticulo' AND `ciudad`='$ciudad'";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }


    public function nuevoinventario($arti,$cantidad,$precio,$ciudad){

        $consulta =  "INSERT INTO inventario (`idarticulos`, `Cantidad`, `precio`, `ciudad`, `estado`) 
                      VALUES ($arti,$cantidad,$precio,$ciudad, 1)";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;

    }

  

   


    


    
}




 ?>