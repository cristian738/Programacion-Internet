<?php
	class contactos{

		private $empresa;
		private $persona;
		
		
		function __construct($empresa,$persona){
			$this->empresa=$empresa;
			$this->persona=$persona;
			
		}

		public function get_empresa(){
			return $this->empresa;
		}
		public function set_empresa($empresa) {
    		$this->empresa = $empresa;
  		}

  		public function get_persona(){
			return $this->persona;
		}
		public function set_persona($persona) {
    		$this->persona = $persona;
  		}

	}

?>	