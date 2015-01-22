<?php
	class galeria{

		private $nombre;
		private $descipcion;
		private $lugar;
		
		function __construct($nombre,$descipcion,$lugar){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->lugar=$lugar;
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

  		public function get_lugar(){
			return $this->lugar;
		}
		public function set_lugar($lugar) {
    		$this->lugar = $lugar;
  		}
	}

?>	