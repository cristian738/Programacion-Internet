<?php
 class Galeria {

	   var $nombre;
	   var $descripcion;
	   var $lugar_id;
	   
	   function __construct($nombre, $descripcion,$lugar_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->lugar_id = $lugar_id;
	      
	   }
	   }

	   public function nombre(){
	   	return $this->nombre;
	   }

	   public function descripcion(){
	   	return $this->descripcion;
	   }

	   public function lugar_id(){
	   	return $this->lugar_id;
	   }


?>