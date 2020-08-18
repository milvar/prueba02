<?php

class Reportes{

    protected $fecha;
    protected $idpedido;
    protected $idarticulo;
    protected $cantidad;
    protected $preciounidad;
    protected $anotacion;


     public  function masvendidos()
    {
        $consulta = "SELECT pro.idarticulos,SUM(pro.cantidad) AS cantidaddes, art.nombre FROM productos_pedido pro INNER JOIN articulos art ON pro.idarticulos = art.idarticulos GROUP BY pro.idarticulos";
        
        $valores = null;
         $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return json_encode($this->prod);
        
        
    }


    


    
}




 ?>