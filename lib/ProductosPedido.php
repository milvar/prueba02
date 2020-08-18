<?php

class ProductosPedido{


     public  function cargalistado($fecha,$idpedido,$idarticulo,$cantidad,$preciounida,$anotacion)
    {
        $consulta = "INSERT INTO productos_pedido (`fecha`,`idpedido`,`idarticulos`,`cantidad`, `preciounidad`,`anotacion`) VALUES ('$fecha', $idpedido, $idarticulo, $cantidad, $preciounida, '$anotacion')";
        
        $valores = null;
         $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
        
        
    }


    


    
}




 ?>