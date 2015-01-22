<?php
class Direccion {

	   var $calle;
	   var $cruze;
	   var $num_ext;
	   var $colonia;
	   var $cod_post;
	   var $ciudad;

	   function __construct($calle, $cruze,$num_ext,$colonia,$cod_post,$ciudad) 
	   {
	       $this->calle = $calle;
	       $this->cruze = $cruze;
	       $this->num_ext = $num_ext;
	       $this->colonia = $colonia;
	       $this->cod_post = $cod_post;
	       $this->ciudad = $ciudad;
	   }

	   public function calle(){
	   	return $this->calle;
	   }

	   public function cruze(){
	   	return $this->cruze;
	   }

	   public function num_ext(){
	   	return $this->num_ext;
	   }


	   public function colonia(){
	   	return $this->colonia;
	   }

	   public function cod_post(){
	   	return $this->cod_post;
	   }

	   public function ciudad(){
	   	return $this->ciudad;
	   }

	   
	}

?>