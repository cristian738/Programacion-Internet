<?php
	class estado{

		private $nombre;
		private $descipcion;
		private $codigo;
		private $pais;
		
		function __construct($nombre,$descipcion,$codigo,$pais){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->codigo=$codigo;
			$this->pais=$pais;
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

  		public function get_pais(){
			return $this->pais;
		}
		public function set_pais($pais) {
    		$this->pais = $pais;
  		}
	}

?>	