<?php
	class categoria{

		private $nombre;
		private $descipcion;
		
		
		function __construct($nombre,$descipcion){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			
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

	}

?>	