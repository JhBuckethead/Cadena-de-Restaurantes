<?php
	if (!class_exists('pedido')) {
		class pedido{
			var $id_pedido;
			var $cantidad;
			var $fecha;
			var $id_persona;
			var $id_producto;
			
			public function __construct(){			
			} 
			public function __construct2($id_pedido_n,$cantidad_n,$fecha_n){
				$this->id_pedido=$id_pedido_n;
				$this->cantidad=$cantidad_n;
				$this->fecha=$fecha_n;
				$this->id_persona=$id_persona_n;
				$this->id_producto=$id_producto_n;
			
			} 
			public function set_id_pedido($id_pedido_n){
				$this->id_pedido=$id_pedido_n;
			} 
			public function get_id_pedido(){
				return $this->id_pedido;
			} 
			
			public function set_cantidad($cantidad_n){
				$this->cantidad=$cantidad_n;
			} 
			public function get_cantidad(){
				return $this->cantidad;
			} 
			
			public function set_fecha($fecha_n){
				$this->fecha=$fecha_n;
			} 
			public function get_fecha(){
				return $this->fecha;
			} 

			public function set_id_persona($id_persona_n){
				$this->id_persona=$id_persona_n;
			} 
			public function get_id_persona(){
				return $this->id_persona;
			} 

			public function set_id_producto($id_producto_n){
				$this->id_producto=$id_producto_n;
			} 
			public function get_id_producto_n(){
				return $this->id_producto;
			} 
		}
	}
?>