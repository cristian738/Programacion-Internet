<?php
 }
	  
	   class Imagenes {

	   var $nom_archivo;
	   var $extencion;
	   var $ruta;
	   
	   function __construct($nom_archivo, $extencion,$ruta) 
	   {
	       $this->nom_archivo = $nom_archivo;
	       $this->extencion = $extencion;
	       $this->ruta = $ruta;
	      
	   }
	   }

	   public function nom_archivo(){
	   	return $this->nom_archivo;
	   }

	   public function extencion(){
	   	return $this->extencion;
	   }

	   public function ruta(){
	   	return $this->ruta;
	   }



?>