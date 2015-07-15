<?php
	class producto{
		var $nombre;
		var $descripcion;
		var $precio;
		var $empresa;
		var $stock;
		var $url;
		public function __construct(){			
		} 
		public function __construct2($nombre_n,$categoria_n,$direccion_n,$descripcion_n,$url_n){
			$this->nombre=$nombre_n;
			$this->categoria=$categoria_n;
			$this->direccion=$direccion_n;
			$this->descripcion=$descripcion_n;
			$this->url=$url_n;
		} 
		
		public function set_nombre($nombre_n){
			$this->nombre=$nombre_n;
		} 
		public function get_nombre(){
			return $this->nombre;
		} 
		
		public function set_descripcion($descripcion_n){
			$this->descripcion=$descripcion_n;
		} 
		public function get_descripcion(){
			return $this->descripcion;
		} 
		
		public function set_precio($precio_n){
			$this->precio=$precio_n;
		} 
		public function get_precio(){
			return $this->precio;
		} 
		public function set_empresa($empresa_n){
			$this->empresa=$empresa_n;
		} 
		public function get_empresa(){
			return $this->empresa;
		} 
		public function set_stock($stock_n){
			$this->url=$stock;
		} 
		public function get_stock(){
			return $this->stock;
		} 
		public function set_url($url_n){
			$this->url=$url_n;
		} 
		public function get_url(){
			return $this->url;
		} 
	}
?>