<?php

   $proveedor = new Proveedor();
   $CategoriaProducto = new CategoriaProducto();


foreach ($data['proveedores'] as $value) {

  $idproveedor = $proveedor->guardarproveedor($value['nombre'],$value['nit']);

  $idcategoria = $CategoriaProducto->Categoria($value['categoria'],$value['descripcion']);
  $proveedor->proveedorcategoria($idproveedor,$idcategoria);

  foreach ($value['direcciones'] as $direccion) {

    $proveedor->guardarcategoriaciudad($idproveedor, $direccion['ciudad'], $direccion['direccion'], $direccion['telefono']);

  }

  $articulos = new Articulos();
  $inventario = new inventario();
  foreach ($value['articulos'] as $articuloslist) {

    $idarticulo = $articulos->nuevoarticulo($idcategoria,$articuloslist['articulo'],$articuloslist['descripcion'],$articuloslist['codigo-de-barras']);
    $inventario->nuevoinventario($idarticulo,$articuloslist['cantidad'],$articuloslist['precio'],$articuloslist['ciudad']);

   
  }

  


}


?>