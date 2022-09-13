<?php
$conexion = mysqli_connect("localhost:3307","root","","pag_web");
$mysqli = new mysqli("localhost:3307","root","","pag_web");
$conn = new mysqli("localhost:3307","root","","pag_web");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
	if($mysqli->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>
