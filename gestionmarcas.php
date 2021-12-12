<?php

$servername = "localhost";
$database = "alquilerbicicletas";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "CONEXI&Oacute;N REALIZADA SATISFACTORIAMENTE";
 
$sql = "INSERT INTO Marca (ID_Marca, NombreM, Proveedor,Fecha_Fabricacion,Observaciones) VALUES ('011', 'Bycicles Strong', 'Bycicles Sergio','2019-05-03','Varios Modelos y Colores')";
if (mysqli_query($conn, $sql)) {
      echo "NUEVA CONEXI&Oacute;N REALIZADA SATISFACTORIAMENTE";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<title>P&aacute;gina de Marcas de Insertar Nueva Marca</title>
<link rel="stylesheet" type="text/css" href="./estilosbicicletas.css" />
</head>
<body>
<center>
	<button onclick="location.href='index.html'">IR A INDEX</button></center>
	<br>
	<center>
<button onclick="location.href='gestionmarcas.html'">IR A GESTI&Oacute;N DE MARCAS</button></center>
</body>
</html>