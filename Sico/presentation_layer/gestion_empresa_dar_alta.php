<?php	
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_empresa_bussines.php");
	include ("../class/producto.php");
	include ("../persistence_layer/conect.php");	
	if(isset($_GET["id"]) AND isset($_GET["alta"])){
		alta_baja_empresa($_GET["id"],$_GET["alta"]);
		echo "<div align=center><h1>SU EMPRESA SE HA REACTIVADO CON EXITO!!
		<meta http-equiv='Refresh' content='2;url=gestion_empresa.php'></font></h1></div>";	
	}	else if (isset($_GET["busqueda"])){
		$empresa=busqueda_emp(0,$_GET['busqueda']);
	}else if (!isset($_GET["busqueda"])){
		$empresa=catalogo_empresa(0);
	}	
	if ((!isset($_GET["id"]) AND !isset($_GET["alta"]))){		
		echo "<div align=center><h1>GESTION DE EMPRESAS</font></h1></div>";	
		echo "<section class='cols'>
				<div align=center class='box'>
				<div>";
			echo 	"<br><h4>Nueva Empresa</h4><a href='gestion_empresa_nuevo.php' class='button1'><img src='images/nuevo.jpg' height='50' width='50'> </a>
			<br><form method='get' action='gestion_empresa_dar_alta.php'>
		<input type='text' name='busqueda' size='15' maxlength='20' value='' /><br/>					  	
		<input type='submit' value='Buscar'/>
		</form>	
			</div>
			</section>"; 
			echo "<div name=empresas>";
		for ($i = 0; $i <count($empresa); $i++) 
		{	
			echo "<section id=empre class='cols'><div align=center class='box'><div>";
			echo	"<h3><br> ".$empresa[$i]->get_nombre()." </h3>
					<p class='pad_bot1'> ". $empresa[$i]->get_categoria()."</p>
					<img src='". $empresa[$i]->get_url()."'<height='50' width='50' /img>";
			echo 	"<br><a href='gestion_empresa_dar_alta.php?alta=1 &id=".$empresa[$i]->get_id_empresa()."'class='button1'>Reactivar</a></div></section>";	
		}	
		echo "</div>";	
		}
?>