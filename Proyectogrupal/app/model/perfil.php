<?php
	class perfil{

		private $usuario;
		private $persona;
		private $imagen;
		
		
		function __construct($usuario,$persona,$imagen){
			$this->usuario=$usuario;
			$this->persona=$persona;
			$this->imagen=$imagen;
			
		}

		public function get_usuario(){
			return $this->usuario;
		}
		public function set_usuario($usuario) {
    		$this->usuario = $usuario;
  		}

  		public function get_persona(){
			return $this->persona;
		}
		public function set_persona($persona) {
    		$this->persona = $persona;
  		}

  		public function get_imagen(){
			return $this->imagen;
		}
		public function set_imagen($imagen) {
    		$this->imagen = $imagen;
  		}

	}

?>	