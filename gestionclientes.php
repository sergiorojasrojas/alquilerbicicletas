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
 $Clave="";
$sql = "INSERT INTO ClienteAdmin(ID_ClienteAdmin, NIF_NIE, NombreCliente,Apellidos,Direccion, FechaNacimiento,FechaCarnet,NumeroCarnet,NombreUsuario,Clave,Correo,Telefono,Edad,Sexo,CodigoPostal,Pais,Idioma,Administrador) VALUES ('".$_POST['ID_ClienteAdmin']."','".$_POST['NIF_NIE']."','".$_POST['NombreCliente']."','".$_POST['Apellidos']."','".$_POST['Direccion']."','".$_POST['FechaNacimiento']."','".$_POST['FechaCarnet']."','".$_POST['NumeroCarnet']."','".$_POST['NombreUsuario']."',
	'".$_POST['Clave']."','".$_POST['Correo']."','".$_POST['Telefono']."','".$_POST['Edad']."','".$_POST['Sexo']."','".$_POST['CodigoPostal']."','".$_POST['Pais']."','".$_POST['Idioma']."','".$_POST['Administrador']."')";

echo "La consulta que estamos ejecutando es insertar un nuevo clienteAdmin en la base de datos: " . $sql . "<br>";
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
	<title>P&aacute;gina de ClienteAdmin de Insertar Nuevo ClienteAdmin</title>
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