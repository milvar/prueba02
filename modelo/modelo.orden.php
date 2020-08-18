<?php

$ban = 0;

$listadopedidos = array();

$pedido = new Pedido();
foreach ($data['pedido'] as $value) {


  $idpedido = $pedido->crearpedido($value['idcliente'],$value['token'],$value['iddireccion'],$value['direccion'],$value['ciudad']);
  
  


  if($idpedido){

    $anotacion = "ND";

    $inventario = new Inventario();
    foreach ($data['pedido'][$ban]['listado'] as $value1) {

      $cantio = $inventario->consultainventario($value1['idarticulo'],$value['ciudad']);


      if($cantio < $value1['cantidad']){

        $inventario->actualizacantidad($value1['idarticulo'],$value['ciudad'],$value1['cantidad']);

        $proveedor = new Proveedor();

        $datosprov = $proveedor->consultaProveedorCiudad($value1['idarticulo'],$value['ciudad']);

        $anotacion = $datosprov[0]['nombre'] . $datosprov[0]['ciudad'] . $datosprov[0]['direccion'] . $datosprov[0]['telefono'];

      }

      $listado = new ProductosPedido();
      $listado->cargalistado($value['fecha'],$idpedido,$value1['idarticulo'],$value1['cantidad'],$value1['precio'],$anotacion);


    }

  }


  $transporte = new transporte($value['direccion'],$value['ciudad']);
  $vehiculo = $transporte->asignaciondevehiculo();


  $gia = new GiadeEntregas($idpedido,$vehiculo[0]['placa']);
  $gia->Gia();



  $ban++;

  array_push($listadopedidos, $idpedido);
}

echo "Los pedidos creado son los siguientes :". json_encode($listadopedidos);


