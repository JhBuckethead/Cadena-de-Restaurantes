<?php  
	if (!function_exists('realizar_pago2')){
		function realizar_pago2($cliente,$productos,$pago,$fecha)
		{
	  	include ("conect.php");
			$SQL_con="INSERT into pago (nombre,total_productos,total_pago,fecha,estado)
			values ('".$cliente."','".$productos."','".$pago."','".$fecha."','SP')";	
			$resultado_ins= mysql_query($SQL_con) or die(mysql_error($link));	
		}
	
	}

	if (!function_exists('consultar_pago2')){
		function consultar_pago2()
		{
		$SQL_con="SELECT * from pago where nombre='Galo Celly'";	
		$resultado_ins= mysql_query($SQL_con);
		while ($rowPedi = mysql_fetch_array($resultado_ins,MYSQL_ASSOC))	
		{
		  $pago[]=$rowPedi;
		}
		return array ($pago);
    	}
	}

	if (!function_exists('realizar_pago3')){
		function realizar_pago3($id,$cuenta)
		{
	  	include ("conect.php");
			$SQL_con="UPDATE pago 
					  set numero_cuenta='".$cuenta."',
					  	  estado='PAGADO'
					  WHERE id_pago=".$id."";	
			$resultado_ins= mysql_query($SQL_con) or die(mysql_error($link));	
		}
	
	}
?>