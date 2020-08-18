<?php

class GiadeEntregas{

    protected $idpedido;
    protected $ciudad;

    public function __construct($idpedido,$placa){

        $this->idpedido = $idpedido;
        $this->placa = $placa;
       

    }

    public  function Gia()
    {
        $consulta =  "INSERT INTO guiadeentregas (`idpedido`, `fecha`, `placavehiculo`, `estado`) 
                      VALUES ($this->idpedido, NOW(), '$this->placa', 'envio')";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

  
    
}




 ?>