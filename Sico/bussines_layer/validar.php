<?php
	extract($_POST);
	include("../persistence_layer/config.php");

	if(!($link=mysql_connect($db_host,$db_user,$db_pass))){
		echo "error de conexion al servidores";
	}
	//necesita el nombre de l base de datos y el nonmbre de la variable
	if (!(mysql_select_db($db_name,$link))) {
		# code...
		echo "error de conexion al servidores";
	}

	$result_set="SELECT email, usuario FROM persona WHERE mail = '$email' AND usuario = '$clave'";
	$res_sql=mysql_query($result_set,$link);
	if (!($res_sql)) 
	{	
		echo "Email/Contraseña Incorrectos";
		echo "<script>location.href='registro.html'</script>";

	}else{
		echo "<br>LOGEO EXITOSO";
		echo "<script>location.href='index.html'</script>";
	}
?>