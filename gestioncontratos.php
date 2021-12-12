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
 
$sql = "INSERT INTO Contrato(ID_Contrato, ID_ClienteAdmin, ID_Bicicleta,ID_Reserva,DetallesContrato, FechaRecogidaC,FechaDevolucionC,Precio,Observaciones) VALUES ('".$_POST['ID_Contrato']."','".$_POST['ID_ClienteAdmin']."','".$_POST['ID_Bicicleta']."','".$_POST['ID_Reserva']."','".$_POST['DetallesContrato']."','".$_POST['FechaRecogidaC']."','".$_POST['FechaDevolucionC']."','".$_POST['Precio']."','".$_POST['Observaciones']."')";

echo "La consulta que estamos ejecutando es insertar un nuevo contrato en la base de datos: " . $sql . "<br>";
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
	<title>P&aacute;gina de Contratos de Insertar Nuevo Contrato</title>
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