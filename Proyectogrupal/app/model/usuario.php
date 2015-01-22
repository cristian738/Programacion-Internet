<?php
	class Usuario{

		private $nickname;
		private $correo;
		private $password;
		
		
		function __construct($nickname,$correo,$password){
			$this->nickname=$nickname;
			$this->correo=$correo;
			$this->password=$$password;
			
		}

		public function get_nickname(){
			return $this->nickname;
		}
		public function set_nickname($nickname) {
    		$this->nickname = $nickname;
  		}

  		public function get_correo(){
			return $this->correo;
		}
		public function set_correo($correo) {
    		$this->correo = $correo;
  		}

  		public function get_password(){
			return $this->password;
		}
		public function set_password($password) {
    		$this->password = $password;
  		}

	}

?>	