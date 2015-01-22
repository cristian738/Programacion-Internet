<?php
	class direccion{

		private $calle1;
		private $calle2;
		private $num_exterior;
		private $colonia;
		private $cp;
		private $ciudad;

		function __construct($calle1,$calle2,$num_exterior,$colonia,$cp,$ciudad){
			$this->calle1=$calle1;
			$this->calle2=$calle2;
			$this->num_exterior=$num_exterior;
			$this->colonia=$colonia;
			$this->cp=$cp;
			$this->ciudad=$ciudad;
		}

		public function get_calle1(){
			return $this->calle1;
		}
		public function set_calle1($calle1) {
    		$this->calle1 = $calle1;
  		}

  		public function get_calle2(){
			return $this->calle2;
		}
		public function set_calle2($calle2) {
    		$this->calle2 = $calle2;
  		}

  		public function get_num_exterior(){
			return $this->num_exterior;
		}
		public function set_num_exterior($num_exterior) {
    		$this->num_exterior = $num_exterior;
  		}

  		public function get_cp(){
			return $this->cp;
		}
		public function set_cp($cp) {
    		$this->cp = $cp;
  		}

  		public function get_colonia(){
			return $this->colonia;
		}
		public function set_colonia($colonia) {
    		$this->colonia = $genero;
  		}

  		public function get_ciudad(){
			return $this->ciudad;
		}
		public function set_ciudad($ciudad) {
    		$this->ciudad = $ciudad;
  		}


	}
?>		