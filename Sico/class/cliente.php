<?php
if (!class_exists('cliente')) {
  class cliente{
		var $id_cliente;
        var $nombre;
		var $mail;
		var $sexo;
		var $cedula;
		var $fecha_nacimiento;
		var $telefono;
		var $direccion;
		var $num_cuenta;
		var $tipo;
		var $usuario;
		var $pass;
		
		public function __construct(){
		} 
		public function __construct2(	$id_cliente_n,$nombre_n,$mail_n,$sexo_n,$cedula_n,$fecha_nacimiento_n,
										$telefono_n,$direccion_n,$num_cuenta_n,$tipo_n,$usuario_n,$pass_n)
		{
			$this->id_cliente=$id_cliente_n;
			$this->nombre=$nombre_n;
			$this->mail=$mail_n;
			$this->sexo=$sexo_n;
			$this->cedula=$cedula_n;
			$this->fecha_nacimiento=$fecha_nacimiento_n;
			$this->telefono=$telefono_n;
			$this->direccion=$direccion_n;
			$this->num_cuenta=$num_cuenta_n;
			$this->tipo=$tipo_n;
			$this->usuario=$usuario_n;
			$this->pass=$pass_n;

		} 
		public function set_id_cliente($id_cliente_n){
			$this->id_cliente=$id_cliente_n;
		} 
		public function get_id_cliente(){
			return $this->id_cliente;
		} 
		
		public function set_nombre($nombre_n){
			$this->nombre=$nombre_n;
		} 
		public function get_nombre(){
			return $this->nombre;
		} 
		
		public function set_cedula($cedula_n){
			$this->cedula=$cedula_n;
		} 
		public function get_cedula(){
			return $this->cedula;
		} 
		
		public function set_mail($mail_n){
			$this->mail=$mail_n;
		} 
		public function get_mail(){
			return $this->mail;
		} 
		public function set_sexo($sexo){
			$this->sexo=$sexo_n;
		} 
		public function get_sexo(){
			return $this->sexo;
		} 
		public function set_fecha_nacimiento($fecha_nacimiento_n){
			$this->fecha_nacimiento=$fecha_nacimiento_n;
		} 
		public function get_fecha_nacimiento(){
			return $this->fecha_nacimiento;
		} 

		public function set_telefono($telefono_n){
			$this->telefono=$telefono_n;
		} 
		public function get_telefono(){
			return $this->telefono;
		} 
		
		public function set_direccion($direccion_n){
			$this->direccion=$direccion_n;
		} 
		public function get_direccion(){
			return $this->direccion;
		} 
		
		public function set_num_cuenta($num_cuenta_n){
			$this->num_cuenta=$num_cuenta_n;
		} 
		public function get_num_cuenta(){
			return $this->num_cuenta;
		} 
		
		public function set_tipo($tipo_n){
			$this->tipo=$tipo_n;
		} 
		public function get_tipo(){
			return $this->tipo;
		} 
		public function set_usuario($usuario_n){
			$this->usuario=$usuario_n;
		} 
		public function get_usuario(){
			return $this->usuario;
		} 
		public function set_pass($pass_n){
			$this->pass=$pass_n;
		} 
		public function get_url(){
			return $this->pass;
		} 
	}
}
?>