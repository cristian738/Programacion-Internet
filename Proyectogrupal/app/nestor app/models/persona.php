<?php
	 class Persona {

	   var $nombre;
	   var $apellido;
	   var $correo;
	   var $telefono;
	   var $genero;
	   var $direccion_id;
	   
	   function __construct($nombre, $apellido,$correo,$telefono,$genero,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->apellido = $apellido;
	       $this->correo = $correo;
	       $this->telefono = $telefono;
	       $this->genero = $genero;
	       $this->direccion_id = $direccion_id;
	   }
	   }

	    public function nombre(){
	   	return $this->nombre;
	   }

	   public function apellido(){
	   	return $this->apellido;
	   }

	   public function correo(){
	   	return $this->correo;
	   }
	    public function telefono(){
	   	return $this->telefono;
	   }
	    public function genero(){
	   	return $this->genero;
	   }
	   public function direccion_id(){
	   	return $this->direccion_id;
	   }





	   
?>