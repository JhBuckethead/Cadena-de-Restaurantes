<?php  
	if (!function_exists('realizar_pedido2')){
	  function realizar_pedido2($id, $cantidad,$fecha)
	  {
	  	include ("conect.php");
		$SQL_con="SELECT cantidad from pedido where id_producto=".$id."";	
		$resultado_ins= mysql_query($SQL_con) or die(mysql_error($link));
		/*if (mysql_num_rows($resultado_ins)>0){
			$pedido= mysql_fetch_array($resultado_ins,MYSQL_ASSOC);
			echo $pedido[0];
			$nuevac=$pedido+$cantidad;
			$SQL_con="UPDATE pedido set cantidad=".$nuevac."
			where id_producto=".$id."";	
				$resultado_ins= mysql_query($SQL_con) or die(mysql_error($link));
		}	else{*/
				$SQL_con="INSERT into pedido (id_producto,cantidad,fecha,id_persona)
				values ('".$id."','".$cantidad."','".$fecha."','1')";	
				$resultado_ins= mysql_query($SQL_con) or die(mysql_error($link));
		/*}	*/
		
	}
	
	}
	if (!function_exists('consultar_carrito2')){
	  function consultar_carrito2($id_persona)
	  {
		$SQL_con="SELECT * from pedido as ped
		INNER JOIN productos AS pro ON ped.id_producto =pro.id_producto
		where id_persona=".$id_persona."";	
		$resultado_ins= mysql_query($SQL_con);

	 while ($rowPedi = mysql_fetch_array($resultado_ins,MYSQL_ASSOC))	
		{
		  $carrito[]=$rowPedi;
		}
		return $carrito;
		}
	}




?>