<?php
	class persona{

		private $nombre;
		private $apellido;
		private $correo;
		private $telefono;
		private $genero;
		private $direccion;

		function __construct($nombre,$apellido,$correo,$telefono,$genero,$direccion){
			$this->nombre=$nombre;
			$this->apellido=$apellido;
			$this->correo=$correo;
			$this->telefono=$telefono;
			$this->genero=$genero;
			$this->direccion=$direccion;
		}

		public function get_nombre(){
			return $this->nombre;
		}
		public function set_nombre($nombre) {
    		$this->nombre = $nombre;
  		}

  		public function get_apellido(){
			return $this->apellido;
		}
		public function set_apellido($apellido) {
    		$this->apellido = $apellido;
  		}

  		public function get_correo(){
			return $this->correo;
		}
		public function set_correo($correo) {
    		$this->correo = $correo;
  		}

  		public function get_telefono(){
			return $this->telefono;
		}
		public function set_telefono($telefono) {
    		$this->telefono = $telefono;
  		}

  		public function get_genero(){
			return $this->genero;
		}
		public function set_genero($genero) {
    		$this->genero = $genero;
  		}

  		public function get_direccion(){
			return $this->direccion;
		}
		public function set_direccion($direccion) {
    		$this->direccion = $direccion;
  		}

	}


?>	