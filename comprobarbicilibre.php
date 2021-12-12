<?php

/* isset = función de PHP ya predefinida. Entre otras utilidades, sirve para comprobar si se ha pulsado el botón en el formulario.
$_POST = es la variable super global en PHP y es un array. */

if(isset($_POST["btnregistro"])) {
	$ID_Bicicleta = $_POST["ID_Bicicleta"];
	
	echo "<br>El ID_Bicicleta que ha introducido es: $ID_Bicicleta, con lo que un cero es que  no est&aacute; disponible y un 1 es que  est&aacute; disponible  <br>";	
	conectar($ID_Bicicleta);
	//validar($email);

	
}

function conectar($bici){
	// Declaramos e inicializamos las variables necesarias para conectar a la base de datos
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

	// Vamos a establecer el conjunto de caracteres predeterminado a usar cuando se envían datos desde y hacia el servidor de la base de datos.
	mysqli_set_charset($conn, "utf8"); 

	// Creamos la consulta SQL que queremos ejecutar
	$consulta = "SELECT * FROM Bicicleta WHERE ID_Bicicleta = '$bici' ";
	echo "La consulta que estamos ejecutando en MySQL es: " . $consulta . "<br>";

	$resultado = mysqli_query($conn, $consulta);
	$tupla = mysqli_fetch_row($resultado);
	$encontrado = $tupla[0]; 

	
	
	validar($encontrado);

// Si entra en el siguiente if, es porque encontró alguno en la base de datos
	If ($encontrado){
		$resultado = mysqli_query($conn, $consulta);

	echo "<br> Se han encontrado un total de: " . $encontrado . " coincidencia/s para ID_ClienteAdmin introducido<br>";

	// Vamos a recorrer y mostrar los resultados obtenidos al ejecutar la consulta anterior

while ($tupla = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo "ID_Bicicleta:". "\n" . "\n";
		echo $tupla["ID_Bicicleta"] . "  " ;
		echo "Disponibilidad:". "\n" . "\n";
		echo $tupla["Disponibilidad"] . "  " ;
		
		echo "<br>";
}
}

// Cerramos la conexión
//$encontrado = $tupla["id_descuento"]; 
//validar($encontrado);
echo "<br>  UN CERO ES QUE  NO EST&Aacute; DISPONIBLE Y UN 1 ES QUE EST&Aacute; DISPONIBLE <br>";
	mysqli_close($conn);
		
}

function validar($validado){	
	if ($validado){ // es lo mismo que poner: $validado == 1
		echo "<br>  UN CERO ES QUE NO EST&Aacute; DISPONIBLE Y UN 1 ES QUE EST&Aacute; DISPONIBLE <br>";

	}
	else {
		echo "<br>Esa biciclet  no est&aacute;a disponible.USTED NO PUEDE REALIZAR LA RESERVA, INTENTE REALIZAR OTRA RESERVA DE OTRA MARCA DE BICICLETA";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>P&aacute;gina de Reservas de Insertar Nueva Reserva</title>
<link rel="stylesheet" type="text/css" href="./estilosbicicletas.css" />
</head>
<body>
<center>
	<button onclick="location.href='index.html'">IR A INDEX</button></center>
	<br>
	<center>
<button onclick="location.href='gestionreservas.html'">IR A GESTI&Oacute;N DE RESERVAS</button></center>
<br>
<center>
<button onclick="location.href='requisitos.html'">IR A P&Aacute;GINA DE REQUISITOS</button></center>
</body>
</html>