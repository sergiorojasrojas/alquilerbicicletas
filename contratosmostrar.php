<?php

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$database = "alquilerbicicletas";
// Vamos a crear la conexión
	$conn = mysqli_connect($serverName, $userName, $password, $database);
	

	// Vamos a comprobar si la conexión ha sido correcta
	if (!$conn){
		die("Fallo al intentar conectar a la base de datos $database: " . mysqli_connect_error());
	}
	echo "Felicidades!Se ha conseguido conectar correctamente a la base de datos $database <br>";

	mysqli_set_charset($conn, "utf8"); 

	// Creamos la consulta SQL que queremos ejecutar
	$consulta = "SELECT count(*) FROM Contrato ";
	echo "La consulta que estamos ejecutando es mostrar todos los contratos que aparecen dados de alta: " . $consulta . "<br>";

	$resultado = mysqli_query($conn, $consulta);
	$tupla = mysqli_fetch_row($resultado);
	$encontrado = $tupla[0]; 

	
	
	//validar($encontrado);
	
    $consulta2 = "SELECT * FROM Contrato";
// Si entra en el siguiente if, es porque encontró alguno en la base de datos
	If ($encontrado){
		$resultado = mysqli_query($conn, $consulta2);

	echo "<br> Se han encontrado un total de: " . $encontrado . " coincidencia/s para ese usuario y contrase&ntilde;a introducidos<br>";

	// Vamos a recorrer y mostrar los resultados obtenidos al ejecutar la consulta anterior

while ($tupla = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo "ID_Contrato:". "\n" . "\n";
		echo $tupla["ID_Contrato"] . "  " ;
		echo "ID_ClienteAdmin:"  ."\n" . "\n";
		echo $tupla["ID_ClienteAdmin"] . " - ";
		echo "ID_Bicicleta" . "\n" . "\n";
		echo $tupla["ID_Bicicleta"] . "  ";
		echo "ID_Reserva" . "\n" . "\n";
		echo $tupla["ID_Reserva"] . "  ";
		echo "Detalles Contrato" . "\n" . "\n";
		echo $tupla["DetallesContrato"] . "  ";
		echo "Fecha Recogida Del Contrato" . "\n" . "\n";
		echo $tupla["FechaRecogidaC"] . "  ";
		echo "Fecha De Devoluci&oacute;n Contrato" . "\n" . "\n";
		echo $tupla["FechaDevolucionC"] . "  ";
		echo "Precio" . "\n" . "\n";
		echo $tupla["Precio"] . "  ";
		echo "Observaciones" . "\n" . "\n";
		echo $tupla["Observaciones"] . "  ";
		echo "<br>";
}

}

// Cerramos la conexión
//$encontrado = $tupla["id_descuento"]; 
//validar($encontrado);
	mysqli_close($conn);
		



?>

<!DOCTYPE html>
<html>
<head>
	<title>P&aacute;gina de Contratos de Mostrar todos los contratos que están dados de alta</title>
<link rel="stylesheet" type="text/css" href="./estilosbicicletas.css" />
</head>
<body>
<center>
<button onclick="location.href='index.html'">IR A INDEX</button></center>
<br>
<center>
<button onclick="location.href='gestioncontratos.html'">IR A GESTI&Oacute;N DE CONTRATOS</button></center>
</body>
</html>