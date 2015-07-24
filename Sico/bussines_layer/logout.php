<?php
	session_start();
	session_destroy();
	header('Location: ../presentation_layer/index.php');
?>