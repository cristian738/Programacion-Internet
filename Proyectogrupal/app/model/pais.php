<?php
	class pais{

		private $nombre;
		private $descipcion;
		private $codigo;
		private $codigo_tel;
		
		function __construct($nombre,$descipcion,$codigo,$codigo_tel){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->codigo=$codigo;
			$this->codigo_tel=$codigo_tel;
		}

		public function get_nombre(){
			return $this->nombre;
		}
		public function set_nombre($nombre) {
    		$this->nombre = $nombre;
  		}

  		public function get_descipcion(){
			return $this->descipcion;
		}
		public function set_apellido($descipcion) {
    		$this->descipcion = $descipcion;
  		}

  		public function get_codigo(){
			return $this->codigo;
		}
		public function set_codigo($codigo) {
    		$this->codigo = $codigo;
  		}

  		public function get_codigo_tel(){
			return $this->codigo_tel;
		}
		public function set_estado($codigo_tel) {
    		$this->codigo_tel = $codigo_tel;
  		}
	}

?>	