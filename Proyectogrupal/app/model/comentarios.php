<?php
	class comentarios{

		private $lugar;
		private $usuario;
		private $imagen;
		
		function __construct($lugar,$usuario,$imagen){
			$this->lugar=$lugar;
			$this->usuario=$usuario;
			$this->imagen=$imagen;
			
		}

		public function get_lugar(){
			return $this->lugar;
		}
		public function set_lugar($lugar) {
    		$this->lugar = $lugar;
  		}

  		public function get_usuario(){
			return $this->usuario;
		}
		public function set_usuario($usuario) {
    		$this->usuario = $usuario;
  		}

  		public function get_imagen(){
			return $this->imagen;
		}
		public function set_imagen($imagen) {
    		$this->imagen = $imagen;
  		}
	}

?>	