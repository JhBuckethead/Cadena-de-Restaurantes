<?php include("../bussines_layer/login_bussines.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="registro/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="registro/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="registro/bootstrap/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.6.js" ></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script>  
	<script type="text/javascript" src="js/Forum_400.font.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
</head>
<body>
	<div class="body6">
		<div class="body1">
				<div class="main">
					<header>
						<h1><a href="index.php" id="logo">Deliccio Classic European Cuisine</a></h1>
					</header>
				</div>
			</div>
		</div>
		<h2 align="center">AUTENTIFIQUESE</h2>
	</div>

<div id="login">
	<form class="col-sm-10" method="post">
	<div class="form-group">
		<br><br><label for="exampleInputName2">Usuario</label>
		<input type="text" class="form-control" id="exampleInputName2" placeholder="Username" name="usuario">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail2">Contraseña</label>
		<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Password" name="pass">
	</div>
	<button type="submit" class="btn btn-primary">Entrar</button>
	<?php
			login();
	?>
</form>
</div>


	
</body>
</html>