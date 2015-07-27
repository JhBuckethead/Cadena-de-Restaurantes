<?php
if (!class_exists('empresa')) {
  class empresa{
		var $nombre;
		var $categoria;
		var $direccion;
		var $descripcion;
		var $url;
		var $id_empresa;
		var $estado;
		public function __construct(){			
		} 
		public function __construct2($id_empresa_n,$nombre_n,$categoria_n,$direccion_n,$descripcion_n,$url_n,$estado_n){
			$this->id_empresa=$id_empresa_n;
			$this->nombre=$nombre_n;
			$this->categoria=$categoria_n;
			$this->direccion=$direccion_n;
			$this->descripcion=$descripcion_n;
			$this->url=$url_n;
			$this->estado=$estado_n;
		} 
		public function set_id_empresa($id_empresa_n){
			$this->id_empresa=$id_empresa_n;
		} 
		public function get_id_empresa(){
			return $this->id_empresa;
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
		
		public function set_categoria($categoria_n){
			$this->categoria=$categoria_n;
		} 
		public function get_categoria(){
			return $this->categoria;
		} 
		public function set_direccion($direccion_n){
			$this->direccion=$direccion_n;
		} 
		public function get_direccion(){
			return $this->direccion;
		} 
		public function set_url($url_n){
			$this->url=$url_n;
		} 
		public function get_url(){
			return $this->url;
		}
		public function set_estado($estado_n){
			$this->estado=$estado_n;
		} 
		public function get_estado(){
			return $this->estado;
		}		
	}
}
?>