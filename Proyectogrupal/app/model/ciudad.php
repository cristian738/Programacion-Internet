<?php
	class ciudad{

		private $nombre;
		private $descipcion;
		private $codigo;
		private $estado;
		
		function __construct($nombre,$descipcion,$codigo,$estado){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->codigo=$codigo;
			$this->estado=$estado;
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

  		public function get_estado(){
			return $this->estado;
		}
		public function set_estado($estado) {
    		$this->estado = $estado;
  		}
	}

?>	