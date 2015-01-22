<?php
class Estado {

	   var $nombre;
	   var $descripcion;
	   var $codigo;
	   var $pais_id;
	   

	   function __construct($nombre, $descripcion,$codigo,$pais_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->codigo = $codigo;
	       $this->pais_id = $pais_id;
	   }
	   }

	   public function nombre(){
	   	return $this->nombre;
	   }

	   public function descripcion(){
	   	return $this->descripcion;
	   }

	   public function codigo(){
	   	return $this->codigo;
	   }


	   public function pais_id(){
	   	return $this->pais_id;
	   }


?>
