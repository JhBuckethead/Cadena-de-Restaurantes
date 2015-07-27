<?php
	include("../persistence_layer/login_persistence.php");
	include("../persistence_layer/conect.php");
	
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

						
				$nombre=$_SESSION['nombres'];
				$consulta="SELECT id_tipo FROM persona WHERE nombres = '".$nombre."'";
				$resultado_cat= mysql_query($consulta);
				$rowCat = mysql_fetch_array($resultado_cat,MYSQL_ASSOC);
				
				
				
				if($rowCat['id_tipo'] == 1){
					header('Location: gestion_empresa.php');
				}else{
					header('Location: seleccion_empresa.php');
				}
				
				
			}else{
				echo "<hr>" . "<h3><label>Alias / Password Invalidos</label></h3>";
			}
		}
	}
	
?>