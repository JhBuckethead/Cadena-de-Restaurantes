<?php include("../bussines_layer/login_bussines.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
</head>
<body>
	<form method="post">
		Alias:
		<input name="usuario" type="text"><br>
		Password
		<input name="pass" type="password"><br>
		<input type="submit" value="Enviar">
		<?php
			login();
		?>
	</form>
	
</body>
</html>