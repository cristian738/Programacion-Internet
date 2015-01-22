<?php
	class Perfil {

	   var $usuario_id;
	   var $persona_id;
	   var $imagen_id;
	   
	   function __construct($usuario_id,$persona_id,$imagen_id) 
	   {
	       $this->usuario_id = $usuario_id;
	       $this->persona_id = $persona_id;
	       $this->imagen_id = $imagen_id;
	       
	   }
	   }


	    public function usuario_id(){
	   	return $this->usuario_id;
	   }

	   public function persona_id(){
	   	return $this->persona_id;
	   }

	   public function imagen_id(){
	   	return $this->imagen_id;
	   }


	   
?>