<?php
	if (!class_exists('pago')) {
		class pago{
			var $id_pago;
			var $nombre;
			var $total_productos;
			var $total_pago;
			var $numero_cuenta;		
			var $fecha;
			var $estado;		
			
			public function __construct(){			
			} 
			public function __construct2($id_pago_n,$nombre_n,$total_productos_n,$total_pago_n,$numero_cuenta_n,$fecha_n,$estado_n){
				$this->id_pago=$id_pago_n;
				$this->nombre=$nombre_n;
				$this->total_productos=$total_productos_n;
				$this->total_pago=$total_pago_n;
				$this->numero_cuenta=$numero_cuenta_n;
				$this->fecha=$fecha_n;
				$this->estado=$estado_n;

			} 
			public function set_id_pago($id_pago_n){
				$this->id_pago=$id_pago_n;
			} 
			public function get_id_pago(){
				return $this->id_pago;
			} 
			
			public function set_nombre($nombre_n){
				$this->nombre=$nombre_n;
			} 
			public function get_nombre(){
				return $this->nombre;
			} 

			public function set_total_productos($total_productos_n){
				$this->total_productos=$total_productos_n;
			} 
			public function get_total_productos(){
				return $this->total_productos;
			} 

			public function set_total_pago($total_pago_n){
				$this->total_pago=$total_pago_n;
			} 
			public function get_total_pago(){
				return $this->total_pago;
			}

			public function set_numero_cuenta($numero_cuenta_n){
				$this->numero_cuenta=$numero_cuenta_n;
			} 
			public function get_numero_cuenta(){
				return $this->numero_cuenta;
			} 

			public function set_fecha($fecha_n){
				$this->fecha=$fecha_n;
			} 
			public function get_fecha(){
				return $this->fecha;
			} 

			public function set_estadoo($estado_n){
				$this->estado=$estado_n;
			} 
			public function get_estado(){
				return $this->estado;
			}  
		}
	}
?>