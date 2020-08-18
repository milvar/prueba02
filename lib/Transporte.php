<?php

class Transporte{

    protected $direccion;
    protected $ciudad;

    public function __construct(string $direccion,int $ciudad){

        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
       

    }

    public  function asignaciondevehiculo()
    {
        $consulta =  "SELECT ru.idruta_entrega, ru.rutas, asi.idtransporte,tra.placa 
from ruta_entrega ru,asiganacion_rutas asi,transporte tra 
where ru.rutas like '%sur oeste%' AND ru.idruta_entrega = asi.idruta_entrega  AND asi.idtransporte = tra.idtransporte AND ru.ciudad = 10;";
        $valores = null;

        $oConectar = new conectorDB;
        $this->prod = $oConectar->consultarBD($consulta, $valores);
        return $this->prod;
    }

  
    
}




 ?>