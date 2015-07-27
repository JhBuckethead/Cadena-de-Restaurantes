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

	if (!function_exists('realizar_pagos')){
		
		function realizar_pagos($id,$cuenta)
		{	
			foreach (glob("../persistence_layer/*.php") as $filename)
			{
				include $filename;
			}
			include ("../class/pago.php");
			
			realizar_pagos2($id,$cuenta);
		}
	}
?>