<?php
	class ranking{

		private $lugar;
		private $usuario;
		private $valoracion;
		
		
		function __construct($lugar,$usuario,$valoracion){
			$this->lugar=$lugar;
			$this->usuario=$usuario;
			$this->valoracion=$valoracion;
			
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

  		public function get_valoracion(){
			return $this->valoracion;
		}
		public function set_valoracion($valoracion) {
    		$this->valoracion = $valoracion;
  		}

	}

?>	