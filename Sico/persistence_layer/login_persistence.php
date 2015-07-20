<?php
	function login_persis()
	{
		require("../persistence_layer/conect.php");

		$alias = mysql_real_escape_string($_POST['usuario']);
		$password = mysql_real_escape_string($_POST['pass']);

		$consulta = mysql_query("SELECT * FROM persona WHERE usuario= '". $alias . "' and
		pass = '" . $password . "'", $link);

		return $consulta;
	}
?>