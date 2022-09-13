<?php
include_once('conexion.php');
$nombre = $_POST['name1'];
$telefono = $_POST['tel'];
$email = $_POST['email'];
$mensaje = $_POST['msj'];

$insert = "INSERT INTO contactos (name1, tel, email, msj) VALUES ('$nombre', '$telefono', '$email',' $mensaje')";
$resultado = mysqli_query($conexion, $insert);

if(!$resultado){
	echo 'Error al registrarse';




}else{
	echo 'Datos registrados exitosamente';
}
mysqli_close($conexion);

?>