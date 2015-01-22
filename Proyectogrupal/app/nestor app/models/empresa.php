<?php
class Empresa {

	   var $nombre;
	   var $descripcion;
	   var $rfc;
	   var $direccion_id;
	   
	   function __construct($nombre,$descripcion,$rfc,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->rfc = $rfc;
	       $this->direccion_id = $direccion_id;
	   }
	   }

	    public function nombre(){
	   	return $this->nombre;
	   }

	   public function descripcion(){
	   	return $this->descripcion;
	   }

	   public function rfc(){
	   	return $this->rfc;
	   }
	    public function direccion_id(){
	   	return $this->direccion_id;
	   }
	   
	   
?>