<?php
	class ubicacion{

		private $lugar;
		private $direccion;
		private $latitud;
		private $longitud;
		
		function __construct($lugar,$direccion,$latitud,$longitud){
			$this->lugar=$lugar;
			$this->direccion=$direccion;
			$this->latitud=$latitud;
			$this->longitud=$longitud;
			
		}

		public function get_lugar(){
			return $this->lugar;
		}
		public function set_lugar($lugar) {
    		$this->lugar = $lugar;
  		}

  		public function get_direccion(){
			return $this->direccion;
		}
		public function set_direccion($direccion) {
    		$this->direccion = $direccion;
  		}

  		public function get_latitud(){
			return $this->latitud;
		}
		public function set_latitud($latitud) {
    		$this->latitud = $latitud;
  		}

  		public function get_longitud(){
			return $this->longitud;
		}
		public function set_longitud($longitud) {
    		$this->longitud = $longitud;
  		}

  		
	}

?>	