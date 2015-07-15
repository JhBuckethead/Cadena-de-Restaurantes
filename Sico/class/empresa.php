<?php
	class empresa{
		var $nombre;
		var $categoria;
		var $direccion;
		var $descripcion;
		var $url;
		public function set_nombre($nombre_n){
			$this->nombre=$nombre_n;
		} 
		public function get_nombre(){
			echo $this->nombre;
		} 
	}
?>