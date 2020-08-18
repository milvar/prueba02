<?php

class Proveedor{


    public  function nuevacategoria($categoria,$descrip)
    {
        $consulta =  "INSERT INTO categoria_productos (`nombre`, `descripcion`) VALUES ($categoria,$descrip)";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

    public  function consultacategoria($nombre)
    {
        $consulta =  "SELECT idcategoria_productos FROM categoria_productos WHERE nombre lIKE '%$nombre%';";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

    public  function guardarproveedor($nombre,$nit){

        $consulta =  "INSERT INTO proveedor (`nit`, `nombre`) VALUES ($nit, $nombre)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;

    }

     public  function consultacategoria($nombre){

        $consulta =  "SELECT nombre, idcategoria_productos from categoria_productos where nombre like '%$nombre%'";
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

        $consulta =  "INSERT INTO listado_proveedor (`idproveedor`, `idcategoria_productos`) VALUES ($proveedor,$idcategoria)";
        $valores = null;
        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;


    }

  

   


    


    
}




 ?>