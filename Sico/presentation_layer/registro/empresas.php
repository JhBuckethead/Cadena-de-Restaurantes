<!DOCTYPE html>
<html>	
<head>
<title>Pantalla Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset=utf-8>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body >

<!--login-->
<div class="login-form">
	<div class="login-info"> </div>
		<h2>SICO</h2>
			<div class="form-info">
				<form>
					<input type="text" class="text" value="Nombre Empresa" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre Empresa';}" >
					<?php
					include("../../bussines_layer/categorias_bussines.php");
					$categoria=catalogo_categoria();
					echo("<select>");
					foreach ($categoria as $cat)
					{
						echo "<option value='$cat'>$cat</option>";
					}
					echo("</select>"."<br>");
					?>

					<br>
					<input type="text" class="text" value="Direccion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Dirección';}" >
					<input type="text" class="text" value="Descripción" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Descripción';}" >
					<input type="text" class="text" value="URL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'URL';}" >

					<input type="submit" value="Registrar">
						<p><a href="index.html">Iniciar Sesión</a></p>
				</form>
			</div>
</div>

</body>
</html>