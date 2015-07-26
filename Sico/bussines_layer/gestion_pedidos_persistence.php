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
		

		$SQL_con2="SELECT * from persona where id_persona=".$id_persona."";
		$resultado_ins1= mysql_query($SQL_con2);

	while ($rowPedi1 = mysql_fetch_array($resultado_ins1,MYSQL_ASSOC))	
		{
		  $carrito_persona=$rowPedi1;
		}

		return array ($carrito_persona,$carrito);
		}
	}

 
	if (!function_exists('empres')){
	  function empres($estado,$empres)
	  {
		$SQL_con="select pro.estado,pro.id_producto,pro.nombre as no1,pro.precio, emp.nombre no2,pro.url 
				from productos as pro 
				INNER JOIN empresa as emp on pro.id_empresa=emp.id_empresa
				WHere pro.estado=".$estado." AND pro.id_empresa=".$empres."";	
		$resultado_tipo= mysql_query($SQL_con);

	   while ($rowPro = mysql_fetch_array($resultado_tipo,MYSQL_ASSOC))	
		{
		  $producto[]=$rowPro;
		}
		return $producto;
		}
	}


?>