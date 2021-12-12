<?php
$edad = $_POST["edad"]; 
echo "Tu edad: $edad<p>"; 

if ($edad < 18) { 
  	echo "No puedes entrar Eres Menor de Edad. No puedes realizar Reservas. Vete al Index"; 
}else{ 
  	echo "Bienvenido Si puedes Realizar Reservas. Haz Clic en IR A GESTI&Oacute;N DE RESERVAS"; 
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