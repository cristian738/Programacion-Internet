<?php
	class Usuario {

	   var $correo;
	   var $password;
	   var $nickname;
	   
	   function __construct($correo, $password,$nickname) 
	   {
	       $this->correo = $correo;
	       $this->password = $password;
	       $this->nickname = $nickname;
	   }
	   }

	    public function correo(){
	   	return $this->correo;
	   }

	   public function password(){
	   	return $this->password;
	   }

	   public function nickname(){
	   	return $this->nickname;
	   }


	   
?>