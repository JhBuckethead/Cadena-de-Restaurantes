<?php
	include("../persistence_layer/login_persistence.php");

	function login()
	{
		if (isset($_POST['usuario']) && isset($_POST['pass'])) 
		{
			$consulta = login_persis();

			if ($resultado = mysql_fetch_assoc($consulta))
			{
				session_start();
				$_SESSION['usuario'] = $resultado['usuario'];
				$_SESSION['pass'] = $resultado['pass'];
				$_SESSION['nombres'] = $resultado['nombres'];

				echo "<br>" . "Has accedido correctamente, bienvenido " . $_SESSION['nombres'];
				header('Location: ./index.php');
			}else{
				echo "<br>" . "Alias / Password Invalidos";
			}
		}
	}
	
?>