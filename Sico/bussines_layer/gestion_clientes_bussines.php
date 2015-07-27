<?php

	if (!function_exists('ingresar_cliente'))
	{
		function ingresar_cliente()
		{
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
				$num_cuenta = $_POST['num_cuenta'];
				$rol = $_POST['rol'];
				$usuario = $_POST['user'];
				$clave = $_POST['password'];

				insertar_cliente($nombre, $email, $genero, $cedula, $date, $telefono, $direccion,
								 $num_cuenta, $rol, $usuario, $clave);

				echo "<div align=center><h1>DATOS INSERTADOS CORRECTAMENTE, ESPERA... <meta http-equiv='Refresh' content='2;url=../presentation_layer/index.php'></font></h1></div>";

			}		
		}
	}

	


	if (!function_exists('actualizar_cliente'))
	{
		function actualizar_cliente($nombre,$email, $sexo, $cedula, $fecha_nacimiento, $telefono, 
									$direccion, $numero_cuenta, $tipo, $usuario, $password)
		{	
			include ("../class/empresa.php");
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			$clase_cliente = new cliente;	
			$clase_cliente->__construct2($nombre,$email, $sexo, $cedula, $fecha_nacimiento, $telefono, 
										$direccion, $numero_cuenta, $tipo, $usuario, $password);		
			modificar_cliente($clase_cliente->get_nombre(),$clase_cliente->get_cedula(),$clase_cliente->get_mail(),
							$clase_cliente->get_sexo(),$clase_cliente->get_fecha_nacimiento(),$clase_cliente->get_telefono(),
							$clase_cliente->get_direccion(),$clase_cliente->get_num_cuenta(), $clase_cliente->get_tipo(),
							$clase_cliente->get_usuario(), $clase_cliente->get_pass());
		}
	}

	if (!function_exists('eliminar_cliente'))
	{
		function eliminar_cliente($nombre)
		{	
			include("../persistence_layer/conect.php");
			$SQL="DELETE FROM persona WHERE nombres='".$nombre."'";
			$resultado=mysql_query($SQL)or die(mysql_error($link));
		}
	}


	
?>