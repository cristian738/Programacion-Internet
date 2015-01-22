<?php
	class foto{

		private $imagen;
		private $galeria;
		private $nombre;
		private $descipcion;
		
		
		function __construct($imagen,$galeria,$nombre,$descipcion){
			$this->imagen=$imagen;
			$this->galeria=$galeria;
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			
		}
		public function get_imagen(){
			return $this->imagen;
		}
		public function set_imagen($imagen) {
    		$this->imagen = $imagen;
  		}

  		public function get_galeria(){
			return $this->galeria;
		}
		public function set_galeria($galeria) {
    		$this->galeria = $galeria;
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