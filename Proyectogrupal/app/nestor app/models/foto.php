
	  
	  <?php
				 }
	  
	   class Foto {

	   var $imagen_id;
	   var $galeria_id;
	   var $nombre;
	   var $descripcion;
	   
	   function __construct($imagen_id, $galeria_id,$nombre,,$descripcion) 
	   {
	       $this->imagen_id = $imagen_id;
	       $this->galeria_id = $galeria_id;
	       $this->descripcion = $descripcion;
	   }
	   }

	   public function imagen_id(){
	   	return $this->imagen_id;
	   }

	   public function galeria_id(){
	   	return $this->galeria_id;
	   }

	   public function nombre(){
	   	return $this->nombre;
	   }
	    public function descripcion(){
	   	return $this->descripcion;
	   }



?>
