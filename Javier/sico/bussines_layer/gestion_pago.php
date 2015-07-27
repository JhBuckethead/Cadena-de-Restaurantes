<?php	
	if (!function_exists('realizar_pago')){
		
		function realizar_pago($cliente,$productos,$pago,$fecha)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			include ("../class/pago.php");
			
			realizar_pago2($cliente,$productos,$pago,$fecha);
		}
	}

	if (!function_exists('consultar_pago')){

		function consultar_pago()
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			include ("../class/pago.php");
			list ($pago) = consultar_pago2();
			return array ($pago);
		}
	}

	if (!function_exists('realizar_pago2')){
		
		function realizar_pago2($id,$cuenta)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			include ("../class/pago.php");
			
			realizar_pago3($id,$cuenta);
		}
	}
?>