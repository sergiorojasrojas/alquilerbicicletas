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
 
$sql = "Delete from Reserva where ID_Reserva ='".$_POST['ID_Reserva']."'";
echo "La consulta que estamos ejecutando es eliminar una reserva con el ID_Reserva de la base de datos: " . $sql . "<br>";
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
<title>P&aacute;gina de Reservas de Eliminar la Reserva  Elegida</title>
<link rel="stylesheet" type="text/css" href="./estilosbicicletas.css" />
</head>
<body>
<center>
<button onclick="location.href='index.html'">IR A INDEX</button></center>
<br>
<center>
<button onclick="location.href='gestionreservas.html'">IR A GESTI&Oacute;N DE RESERVAS</button></center>
</body>
</html>
