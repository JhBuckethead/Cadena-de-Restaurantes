<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		$sesion = true;
	}else{
		$sesion = false;
	}
?>