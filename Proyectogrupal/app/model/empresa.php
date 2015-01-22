<?php
	class empresa{

		private $nombre;
		private $descipcion;
		private $rfc;
		private $direccion;
		
	
		function __construct($nombre,$descipcion,$rfc,$direccion){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->rfc=$rfc;
			$this->direccion=$direccion;
			
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

  		public function get_rfc(){
			return $this->rfc;
		}
		public function set_rfc($rfc) {
    		$this->rfc = $rfc;
  		}

  		public function get_direccion(){
			return $this->direccion;
		}
		public function set_direccion($direccion) {
    		$this->direccion = $direccion;
  		}
	}

?>	