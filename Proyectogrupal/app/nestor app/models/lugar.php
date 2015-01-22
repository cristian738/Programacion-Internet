<?php
 class Lugar {

	   var $nombre;
	   var $descripcion;
	   var $categoria_id;
	   var $direccion_id;
	   

	   function __construct($nombre, $descripcion,$categoria_id,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->categoria_id = $categoria_id;
	       $this->direccion_id = $direccion_id;
	   }
	   }

	   public function nombre(){
	   	return $this->nombre;
	   }

	   public function descripcion(){
	   	return $this->descripcion;
	   }

	   public function categoria_id(){
	   	return $this->categoria_id;
	   }


	   public function direccion_id(){
	   	return $this->direccion_id;
	   }


?>
