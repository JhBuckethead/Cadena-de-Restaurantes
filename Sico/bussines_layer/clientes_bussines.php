<?php
include("../persistence_layer/gestion_cliente_persistence.php");
			
if((($_POST['nombre'])==NULL) or (($_POST['user'])==NULL) or (($_POST['password'])==NULL) or (($_POST['email'])==NULL)
	or (($_POST['genero'])==NULL) or (($_POST['date'])==NULL) or (($_POST['telefono'])==NULL)
	or (($_POST['direccion'])==NULL) or (($_POST['num_cuenta'])==NULL) or (($_POST['rol'])==NULL) or (($_POST['cedula'])==NULL))
{
	echo "<div align=center><h1>Todos los son obligatorios... <meta http-equiv='Refresh' content='2;url=../presentation_layer/registro/clientes.php'></font></h1></div>";
	
}else{
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$genero = $_POST['genero'];
	$cedula = $_POST['cedula'];
	$date = $_POST['date'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$rol = $_POST['rol'];
	$usuario = $_POST['user'];
	$clave = $_POST['password'];

	insertar_cliente($nombre, $email, $genero, $cedula, $date, $telefono, $direccion, $rol, $usuario, $clave);

	echo "<div align=center><h1>DATOS INSERTADOS CORRECTAMENTE, ESPERA... <meta http-equiv='Refresh' content='2;url=../presentation_layer/index.php'></font></h1></div>";

}

?>