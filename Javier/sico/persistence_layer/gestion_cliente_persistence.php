<?php
	if (!function_exists('insertar_cliente')){
	function insertar_cliente($nombre, $email, $genero, $cedula, $date, $telefono, $direccion,
						  $rol, $usuario, $clave)
	{
		include("conect.php");		
		if($rol=="Cliente")		
		{
			$tipo="2";
		}else{
			$tipo="1";
		}		
		$SQL = "INSERT INTO persona(id_persona, nombres, mail, sexo, cedula, fecha_nacimiento, telefono,
												direccion, id_tipo, usuario, pass) 
							VALUES ('','$nombre','$email','$genero','$cedula','$date','$telefono','$direccion',
								'$tipo','$usuario','$clave')";
		
		$query= mysql_query($SQL) or die(mysql_error($link));
	}}

	if (!function_exists('modificar_cliente'))
	{
		function modificar_cliente(	$nombre, $email, $genero, $cedula, $date, $telefono, $direccion,
						 			$num_cuenta, $rol, $usuario, $clave, $id)
		{
			include ("conect.php");
			$SQL_upd="UPDATE persona SET 	nombres='".$nombre."',mail=".$email.",sexo='".$genero."',cedula='".$cedula."',
											fecha_nacimiento='".$date."',telefono=".$telefono.",direccion=".$direccion."
											,num_cuenta=".$num_cuenta.",id_tipo=".$rol.",usuario=".$usuario.",pass=".$clave."
											 WHERE id_persona=".$id.""; 
			$resultado_SQL_upd= mysql_query($SQL_upd) or die(mysql_error($link));
		}
	}
?>