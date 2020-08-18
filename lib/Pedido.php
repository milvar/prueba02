<?php

class Pedido{


    public  function crearpedido($idcliente,$token,$iddireccion,$direccion,$ciudad)
    {
        $consulta =  "INSERT INTO `pedido` (`idcliente`,`token`, `iddireccion`,`direccion`,`ciudad`,`fechapedido`,`fechaentrega`, `estado`) 
                      VALUES ($idcliente, $token , $iddireccion ,'$direccion',$ciudad, NOW(), DATE_ADD(NOW(),INTERVAL 1 DAY),'p')";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }


    public  function listadopedido($id,$fecha,$idarticulo,$cantidad,$precio,$anotacion = null)
    {
        $consulta =  "INSERT INTO `productos_pedido` (`idpedido`, `idarticulo`, `cantidad`, `preciounidad`, `anotacion`) VALUES ($id, $fecha, $idarticulo, $cantidad,$precio,$anotacion);";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }


    


    
}




 ?>