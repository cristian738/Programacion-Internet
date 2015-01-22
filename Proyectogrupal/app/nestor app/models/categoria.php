<?php
  class Categoria {

	   var $nombre;
	   var $descripcion;
	  
	   

	   function __construct($nombre, $descripcion) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	    
	   }
	   }

	   public function Getnombre(){
	   	return $this->nombre;
	   }

	   public function Getdescripcion(){
	   	return $this->descripcion;
	   }
	    public function SetNombre(){
	   	$this->nombre;
	   }
	    public function Setdescripcion(){
	   	$this->descripcion;
	   }


	   

?>
