<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">


</head>
<body>

<div class="body6">
	<div class="body1" align="center">
			<div class="main">
				<header>
					<h1><a href="../index.php" id="logo">Deliccio Classic European Cuisine</a></h1>
				</header>
			</div>
			
		</div>
		
	</div>
	<h2 align="center">REGITRO DE CLIENTES</h2>
</div><br>

<div id="login_insert">
	<form class="form-horizontal" method="POST" action="../../bussines_layer/clientes_bussines.php">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="nombre">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="User" name="user">
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Cedula</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword3" placeholder="DNI" name="cedula">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-10">
				<select class="form-control" id="select" name="genero">
					<option>Masculino</option>
                  	<option>Femenino</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nacimiento</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="inputEmail3" placeholder="Email" name="date">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputEmail3" placeholder="Phone" name="telefono">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="Addres" name="direccion">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nro. Cuenta</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputEmail3" placeholder="Account Number" name="num_cuenta">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Rol</label>
			<div class="col-sm-10">
				<select class="form-control" id="select" name="rol">
                  	<option>Cliente</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success">Insertar Nuevo Usuario</button>
		</div>
		</div>
	</form>
</div>
	<script src"jquery/js/jquery-1.11.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/npm.js"></script>
</body>
</html>