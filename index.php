<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$link =$_POST['url'];


switch ($link) {
    case "ordenes":

		include 'lib/ConectorDB.php';
		include 'lib/Pedido.php';
		include 'lib/Cliente.php';
		include 'lib/Inventario.php';
		include 'lib/ProductosPedido.php';
		include 'lib/Transporte.php';
		include 'lib/GiadeEntregas.php';

		$json = file_get_contents("php://input");
		$data = json_decode($json,true);

		include 'modelo/modelo.orden.php';

		http_response_code(200);
        
        break;
    case "proveedores":
    
    	include 'lib/ConectorDB.php';
		include 'lib/Proveedor.php';
		include 'lib/CategoriaProducto.php';
		include 'lib/Articulos.php';
		include 'lib/Inventario.php';

		$json = file_get_contents("php://input");
		$data = json_decode($json, true);

		include 'modelo/modelo.articulo.php';

		http_response_code(200);

        break;
    case "inventario":
    
    	include 'lib/ConectorDB.php';

		$json = file_get_contents("php://input");
		$data = json_decode($json, true);

		include 'modelo/modelo.inventario.php';

		http_response_code(200);

        break;

}

}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	

	$link = $_GET['url'];

	switch ($link) {
    case "lomasvendido":

    include 'lib/ConectorDB.php';
    include 'lib/Reportes.php';
    include 'modelo/masvendido.php';
        
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}





}
*/
 ?>