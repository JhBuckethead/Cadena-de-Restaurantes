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
					<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" >
					<input type="text" class="text" value="Apellido" onfocus="this.value = '';" onblur="if (this.value == 'Apellido') {this.value = 'Apellido';}" >
					<input type="text" class="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

					<input type="submit" value="Registrar">
				</form>
			</div>
</div>

</body>
</html>