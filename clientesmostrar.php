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
	$consulta = "SELECT count(*) FROM ClienteAdmin ";
	echo "La consulta que estamos ejecutando es mostrar todos los ClienteAdmin que aparecen dados de alta: " . $consulta . "<br>";

	$resultado = mysqli_query($conn, $consulta);
	$tupla = mysqli_fetch_row($resultado);
	$encontrado = $tupla[0]; 

	
	
	//validar($encontrado);
	
    $consulta2 = "SELECT * FROM ClienteAdmin";
// Si entra en el siguiente if, es porque encontró alguno en la base de datos
	If ($encontrado){
		$resultado = mysqli_query($conn, $consulta2);

	echo "<br> Se han encontrado un total de: " . $encontrado . " coincidencia/s para ese usuario y contrase&ntilde;a introducidos<br>";

	// Vamos a recorrer y mostrar los resultados obtenidos al ejecutar la consulta anterior

while ($tupla = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo "ID_ClienteAdmin:". "\n" . "\n";
		echo $tupla["ID_ClienteAdmin"] . "  " ;
		echo "NIF_NIE:"  ."\n" . "\n";
		echo $tupla["NIF_NIE"] . " - ";
		echo "Nombre del Cliente" . "\n" . "\n";
		echo $tupla["NombreCliente"] . "  ";
		echo "Apellidos" . "\n" . "\n";
		echo $tupla["Apellidos"] . "  ";
		echo "Direccion" . "\n" . "\n";
		echo $tupla["Direccion"] . "  ";
		echo "Fecha De Nacimiento" . "\n" . "\n";
		echo $tupla["FechaNacimiento"] . "  ";
		echo "Fecha De Carnet" . "\n" . "\n";
		echo $tupla["FechaCarnet"] . "  ";
		echo "N&uacute;mero de Carnet " . "\n" . "\n";
		echo $tupla["NumeroCarnet"] . "  ";
		echo "Nombre de Usuario" . "\n" . "\n";
		echo $tupla["NombreUsuario"] . "  ";
		echo "Clave" . "\n" . "\n";
		echo $tupla["Clave"] . "  ";
		echo "Correo" . "\n" . "\n";
		echo $tupla["Correo"] . "  ";
		echo "Telefono" . "\n" . "\n";
		echo $tupla["Telefono"] . "  ";
		echo "Edad" . "\n" . "\n";
		echo $tupla["Edad"] . "  ";
		echo "Sexo" . "\n" . "\n";
		echo $tupla["Sexo"] . "  ";
		echo "CodigoPostal" . "\n" . "\n";
		echo $tupla["CodigoPostal"] . "  ";
		echo "Pais" . "\n" . "\n";
		echo $tupla["Pais"] . "  ";
		echo "Idioma" . "\n" . "\n";
		echo $tupla["Idioma"] . "  ";
		echo "Administrador" . "\n" . "\n";
		echo $tupla["Administrador"] . "  ";
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
<button onclick="location.href='clientesusuarios.html'">IR A GESTI&Oacute;N DE CLIENTESADMIN</button></center>
</body>
</html>