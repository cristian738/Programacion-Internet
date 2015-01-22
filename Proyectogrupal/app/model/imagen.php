<?php
	class imagen{

		private $nombre;
		private $extencion;
		private $ruta;
		
		function __construct($nombre,$extencion,$ruta){
			$this->nombre=$nombre;
			$this->extencion=$extencion;
			$this->ruta=$ruta;
		}

		public function get_nombre(){
			return $this->nombre;
		}
		public function set_nombre($nombre) {
    		$this->nombre = $nombre;
  		}

  		public function get_extencion(){
			return $this->extencion;
		}
		public function set_extencion($extencion) {
    		$this->extencion = $extencion;
  		}

  		public function get_ruta(){
			return $this->ruta;
		}
		public function set_ruta($ruta) {
    		$this->ruta = $ruta;
  		}
	}

?>	