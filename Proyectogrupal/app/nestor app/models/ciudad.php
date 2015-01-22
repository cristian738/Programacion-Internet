<?php
	class Ciudad {

	   var $nombre;
	   var $descripcion;
	   var $codigo;
	   var $estado_id;
	   

	   function __construct($nombre, $descripcion,$codigo,$estado_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->codigo = $codigo;
	       $this->estado_id = $estado_id;
	   }
	    }

	    public function Getnombre(){
	   	return $this->nombre;
	   }
	    public function Setnombre(){
	   	$this->nombre;
	   }

	   public function descripcion(){
	   	return $this->descripcion;
	   }

	   public function codigo(){
	   	return $this->codigo;
	   }


	   public function estado_id(){
	   	return $this->estado_id;
	   }
?>