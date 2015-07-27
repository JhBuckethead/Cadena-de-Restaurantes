<?php
	echo "<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>";
	include ("../bussines_layer/gestion_empresa_bussines.php");
	include ("../class/empresa.php");
	$empresa=catalogo_empresa(1);
	echo "<div align=center><h1>GESTION DE EMPRESAS</font></h1></div>";	
	echo "<section class='cols'>
			<div align=center class='box'>
			<div>";
		echo 	"<br></div>
		</div></section>"; 
		echo "<div name=empresas>";
	for ($i = 0; $i <count($empresa); $i++) 
	{	
		echo "<section id=empre class='cols'><div align=center class='box'><div>";
		echo	"<h3><br> ".$empresa[$i]->get_nombre()." </h3>
				<p class='pad_bot1'> ". $empresa[$i]->get_categoria()."</p>
				<img src='". $empresa[$i]->get_url()."'<height='50' width='50' /img>";
		echo 	"<br><a href='realizar_pedido.php?empresa=".$empresa[$i]->get_id_empresa()."' class='button1'>IR</a></div></section>";
	}	
	echo "</div>";	
?>