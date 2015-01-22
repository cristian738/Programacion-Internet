<?php
	class lugar{

		private $nombre;
		private $descipcion;
		private $categoria;
		private $direccion;
		
		function __construct($nombre,$descipcion,$categoria,$direccion){
			$this->nombre=$nombre;
			$this->descipcion=$descipcion;
			$this->categoria=$categoria;
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

  		public function get_categoria(){
			return $this->categoria;
		}
		public function set_categoria($categoria) {
    		$this->categoria = $categoria;
  		}

  		public function get_direccion(){
			return $this->direccion;
		}
		public function set_direccion($direccion) {
    		$this->direccion = $direccion;
  		}
	}

?>	