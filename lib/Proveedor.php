<?php

class Proveedor{


    public  function consultaProveedorCiudad($darticulo,$ciudad)
    {
        $consulta =  "SELECT `ar.idcategoria_productos`,`lis.idproveedor`, `pro.nombre`, `prov.ciudad`,
                             `prov.direccion`,`prov.telefono`
                      FROM articulos ar, listado_proveedor lis,proveedor pro,proveedor_ciudad prov WHERE `idarticulos` = $idarticulo AND `ar.idcategoria_productos` = `lis.idcategoria_productos` AND `lis.idproveedor` = `pro.idproveedor` AND `lis.idproveedor` = `prov.idproveedor` AND  `prov.ciudad` = $ciudad";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

    public  function actualizacantidad($Cantidad)
    {
        $consulta =  "UPDATE `inventario` SET `Cantidad`= Cantidad - $Cantidad
                     WHERE `idarticulo`= $this->idarticulo AND ciudad = $this->ciudad";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

    public  function guardarproveedor($nombre,$nit){

        $consulta =  "INSERT INTO `proveedor` (`nit`, `nombre`) VALUES ('$nit', '$nombre')";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;

    }

    public  function guardarcategoria($nombre,$nit){

        $consulta =  "INSERT INTO proveedor (`nit`, `nombre`) VALUES ($nit, $nombre)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;

    }

    public  function guardarcategoriaciudad($idproveedor, $ciudad, $direccion, $telefono){

        $consulta =  "INSERT INTO proveedor_ciudad (`idproveedor`, `ciudad`, `direccion`, `telefono`, `estado`) 
                      VALUES ('$idproveedor', '$ciudad', '$direccion', '$telefono', 1)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;

    }


    public function proveedorcategoria($proveedor,$idcategoria){

        $consulta =  "INSERT INTO listado_proveedor (`idproveedor`, `idcategoria_productos`, `estado`) VALUES ($proveedor,$idcategoria,1)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;


    }

  

   


    


    
}




 ?>