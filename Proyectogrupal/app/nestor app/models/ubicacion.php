<?php
	class Ubicacion {

	   var $lugar_id;
	   var $direccion_id;
	   var $latitud;
	   var $longitud;
	   
	   function __construct($lugar_id, $direccion_id,$latitud,$longitud) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->direccion_id = $direccion_id;
	       $this->latitud = $latitud;
	       $this->longitud = $longitud;
	   }
	   }

	    public function lugar_id(){
	   	return $this->lugar_id;
	   }

	   public function direccion_id(){
	   	return $this->direccion_id;
	   }

	   public function latitud(){
	   	return $this->latitud;
	   }
	    public function longitud(){
	   	return $this->longitud;
	   }




	   
?>