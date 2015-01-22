<?php
 class Contanto {

	   var $empresa_id;
	   var $persona_id;
	   
	   
	   function __construct($empresa_id,$persona_id) 
	   {
	       $this->empresa_id = $empresa_id;
	       $this->persona_id = $persona_id;
	       
	   }
	   }

	   public function empresa_id(){
	   	return $this->empresa_id;
	   }

	   public function persona_id(){
	   	return $this->persona_id;
	   }


	   public function ciudad(){
	   	return $this->ciudad;
	   }

	   
	

?>