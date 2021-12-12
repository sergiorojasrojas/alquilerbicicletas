<?php

/* isset = función de PHP ya predefinida. Entre otras utilidades, sirve para comprobar si se ha pulsado el botón en el formulario.
$_POST = es la variable super global en PHP y es un array. */

if(isset($_POST["btnAcceder"])) {
	$usuario = $_POST["nombre_usuario"];
	$password = $_POST["passw_usuario"];

	echo "<br>El usuario que ha introducido es: $usuario y la contrase&ntilde;a es: $password <br>";
	
	conectar($usuario,$password);
	

}

function conectar($usuario,$clave){
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

	mysqli_set_charset($conn, "utf8"); 

	// Creamos la consulta SQL que queremos ejecutar
	$consulta = "SELECT count(*) FROM ClienteAdmin WHERE NombreUsuario = '$usuario' and Clave= '$clave' ";
	echo "La consulta que estamos ejecutando en MySQL es: " . $consulta . "<br>";

	$resultado = mysqli_query($conn, $consulta);
	$tupla = mysqli_fetch_row($resultado);
	$encontrado = $tupla[0]; 

	
	
	validar($encontrado);
	
    $consulta2 = "SELECT * FROM ClienteAdmin WHERE NombreUsuario = '$usuario' and Clave= '$clave' ";
// Si entra en el siguiente if, es porque encontró alguno en la base de datos
	If ($encontrado){
		$resultado = mysqli_query($conn, $consulta2);

	echo "<br> Se han encontrado un total de: " . $encontrado . " coincidencia/s para ese usuario y contrase&ntilde;a introducidos<br>";

	// Vamos a recorrer y mostrar los resultados obtenidos al ejecutar la consulta anterior

while ($tupla = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo "NombreCliente:". "\n" . "\n";
		echo $tupla["NombreCliente"] . "  " ;
		echo "Nombre Usuario:"  ."\n" . "\n";
		echo $tupla["NombreUsuario"] . " - ";
		echo "Clave" . "\n" . "\n";
		echo $tupla["Clave"] . "  ";
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
		echo "<br> Bienvenido. Ha Introducido bien el Usuario y la contrase&ntilde;a<br>";

	}
	else {
		echo "<br>Ese no corresponde a ning&uacute;n  ningun  Usuario ni a ninguna contrase&ntilde;a Intenta Registrarse con el Administrador";
	}
}


?>