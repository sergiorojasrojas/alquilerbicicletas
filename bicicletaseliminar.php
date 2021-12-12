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
 
$sql = "Delete from Bicicleta where ID_Bicicleta ='".$_POST['ID_Bicicleta']."'";
echo "La consulta que estamos ejecutando en MySQL es: " . $sql . "<br>";
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
<title>P&aacute;gina de Bicicletas de Eliminar la bicicleta Elegida</title>
<link rel="stylesheet" type="text/css" href="./estilosbicicletas.css" />
</head>
<body>
<center>
<button onclick="location.href='index.html'">IR A INDEX</button></center>
<br>
<center>
<button onclick="location.href='gestionbicicletas.html'">IR A GESTI&Oacute;N DE BICICLETAS</button></center>
</body>
</html>
