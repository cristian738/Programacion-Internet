<?php
	class ranking {

	   var $lugar_id;
	   var $usuario_id;
	   var $valoracion;
	   
	   function __construct($lugar_id,$usuario_id,$valoracion) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->usuario_id = $usuario_id;
	       $this->valoracion = $valoracion;
	       
	   }
	   }

	    public function lugar_id(){
	   	return $this->lugar_id;
	   }

	   public function usuario_id(){
	   	return $this->usuario_id;
	   }

	   public function valoracion(){
	   	return $this->valoracion;
	   }


	   
?>