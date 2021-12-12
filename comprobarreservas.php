<?php

/* isset = función de PHP ya predefinida. Entre otras utilidades, sirve para comprobar si se ha pulsado el botón en el formulario.
$_POST = es la variable super global en PHP y es un array. */

if(isset($_POST["btnregistro"])) {
	$ID_Reserva = $_POST["ID_Reserva"];
	
	echo "<br>El ID_Reserva que ha introducido es: $ID_Reserva  <br>";	
	conectar($ID_Reserva);
	//validar($email);

	
}

function conectar($reservado){
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
	$consulta = "SELECT * FROM Reserva WHERE ID_Reserva = '$reservado' ";
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
		echo "ID_Reserva:". "\n" . "\n";
		echo $tupla["ID_Reserva"] . "  " ;
		echo "Fecha de Devoluci&oacute;n:"  ."\n" . "\n";
		echo $tupla["FechaDevolucionR"] . " - ";
		
		echo "<br>";
}
}

// Cerramos la conexión
//$encontrado = $tupla["id_descuento"]; 
//validar($encontrado);
	mysqli_close($conn);
		
}

function validar($validado){	
	if ($validado){ // es lo mismo que poner: $validado == 1
		echo "<br> Bienvenido. Ha Introducido bien el ID_Reserva Ya esa bicicleta  ha sido entregada .PUEDE PROCEDER A REALIZAR LA RESERVA<br>";

	}
	else {
		echo "<br>Ese ID_Reserva no corresponde a ning&uacute;n reserva hecha por un cliente de la base de datos alquilerbicicletas.USTED NO PUEDE REALIZAR LA RESERVA, SE TIENE QUE REGISTRAR EN EN ENLACE IR A GESTI&Oacute; DE RESERVAS";
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