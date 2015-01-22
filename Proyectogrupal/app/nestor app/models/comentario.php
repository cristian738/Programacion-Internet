<?php
	class Comentarios {

	   var $lugar_id;
	   var $usuario_id;
	   var $comentario;
	   
	   function __construct($lugar_id,$usuario_id,$comentario) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->usuario_id = $usuario_id;
	       $this->comentario = $comentario;
	       
	   }
	   }

	    public function lugar_id(){
	   	return $this->lugar_id;
	   }

	   public function usuario_id(){
	   	return $this->usuario_id;
	   }

	   public function comentario(){
	   	return $this->comentario;
	   }


	   
?>