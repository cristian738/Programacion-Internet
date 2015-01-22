<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<?php
	/////////////////////////////////////////////////
		class Direccion {

	   var $calle;
	   var $cruze;
	   var $num_ext;
	   var $colonia;
	   var $cod_post;
	   var $ciudad;

	   function Direccion($calle, $cruze,$num_ext,$colonia,$cod_post,$ciudad) 
	   {
	       $this->calle = $calle;
	       $this->cruze = $cruze;
	       $this->num_ext = $num_ext;
	       $this->colonia = $colonia;
	       $this->cod_post = $cod_post;
	       $this->ciudad = $ciudad;
	   }
	}
	//////////////////////////////////////////////////
	class Ciudad {

	   var $nombre;
	   var $descripcion;
	   var $codigo;
	   var $estado_id;
	   

	   function Ciudad($nombre, $descripcion,$codigo,$estado_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->codigo = $codigo;
	       $this->estado_id = $estado_id;
	   }
	    }
	 ///////////////////////////////////////////////////////
	    class Estado {

	   var $nombre;
	   var $descripcion;
	   var $codigo;
	   var $pais_id;
	   

	   function Estado($nombre, $descripcion,$codigo,$pais_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->codigo = $codigo;
	       $this->pais_id = $pais_id;
	   }
	   }
 	///////////////////////////////////////////////////////
	    class Pais {

	   var $nombre;
	   var $descripcion;
	   var $codigo;
	   var $codigo_tel;
	   

	   function Pais($nombre, $descripcion,$codigo,$codigo_tel) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->codigo = $codigo;
	       $this->codigo_tel = $codigo_tel;
	   }
	   }
	//////////////////////////////////////////////////////
	    class Lugar {

	   var $nombre;
	   var $descripcion;
	   var $categoria_id;
	   var $direccion_id;
	   

	   function Lugar($nombre, $descripcion,$categoria_id,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->categoria_id = $categoria_id;
	       $this->direccion_id = $direccion_id;
	   }
	   }
	 ////////////////////////////////////////////////////////

	    class Categoria {

	   var $nombre;
	   var $descripcion;
	  
	   

	   function Categoria($nombre, $descripcion) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	    
	   }
	   }
	    ////////////////////////////////////////////////////////
	    class Galeria {

	   var $nombre;
	   var $descripcion;
	   var $lugar_id;
	   
	   function Galeria($nombre, $descripcion,$lugar_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->lugar_id = $lugar_id;
	      
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class Imagenes {

	   var $nom_archivo;
	   var $extencion;
	   var $ruta;
	   
	   function Imagenes($nom_archivo, $extencion,$ruta) 
	   {
	       $this->nom_archivo = $nom_archivo;
	       $this->extencion = $extencion;
	       $this->ruta = $ruta;
	      
	   }
	   }
	   ////////////////////////////////////////////////////////
	   class Foto {

	   var $imagen_id;
	   var $galeria_id;
	   var $nombre;
	   var $descripcion;
	   
	   function Foto($imagen_id, $galeria_id,$nombre,,$descripcion) 
	   {
	       $this->imagen_id = $imagen_id;
	       $this->galeria_id = $galeria_id;
	       $this->descripcion = $descripcion;
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class Usuario {

	   var $correo;
	   var $password;
	   var $nickname;
	   
	   function Usuario($correo, $password,$nickname) 
	   {
	       $this->correo = $correo;
	       $this->password = $password;
	       $this->nickname = $nickname;
	   }
	   }
	   ////////////////////////////////////////////////////////
	   class Ubicacion {

	   var $lugar_id;
	   var $direccion_id;
	   var $latitud;
	   var $longitud;
	   
	   function Ubicacion($lugar_id, $direccion_id,$latitud,$longitud) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->direccion_id = $direccion_id;
	       $this->latitud = $latitud;
	       $this->longitud = $longitud;
	   }
	   }
	   ////////////////////////////////////////////////////////
	   class Ubicacion {

	   var $lugar_id;
	   var $direccion_id;
	   var $latitud;
	   var $longitud;
	   
	   function Ubicacion($lugar_id, $direccion_id,$latitud,$longitud) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->direccion_id = $direccion_id;
	       $this->latitud = $latitud;
	       $this->longitud = $longitud;
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class Persona {

	   var $nombre;
	   var $apellido;
	   var $correo;
	   var $telefono;
	   var $genero;
	   var $direccion_id;
	   
	   function Persona($nombre, $apellido,$correo,$telefono,$genero,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->apellido = $apellido;
	       $this->correo = $correo;
	       $this->telefono = $telefono;
	       $this->genero = $genero;
	       $this->direccion_id = $direccion_id;
	   }
	   }
	   ////////////////////////////////////////////////////////
	   class Empresa {

	   var $nombre;
	   var $descripcion;
	   var $rfc;
	   var $direccion_id;
	   
	   function Empresa($nombre,$descripcion,$rfc,$direccion_id) 
	   {
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
	       $this->rfc = $rfc;
	       $this->direccion_id = $direccion_id;
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class Contanto {

	   var $empresa_id;
	   var $persona_id;
	   
	   
	   function Contanto($empresa_id,$persona_id) 
	   {
	       $this->empresa_id = $empresa_id;
	       $this->persona_id = $persona_id;
	       
	   }
	   }
	   ////////////////////////////////////////////////////////
	   class Comentarios {

	   var $lugar_id;
	   var $usuario_id;
	   var $comentario;
	   
	   function Comentarios($lugar_id,$usuario_id,$comentario) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->usuario_id = $usuario_id;
	       $this->comentario = $comentario;
	       
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class ranking {

	   var $lugar_id;
	   var $usuario_id;
	   var $valoracion;
	   
	   function ranking($lugar_id,$usuario_id,$valoracion) 
	   {
	       $this->lugar_id = $lugar_id;
	       $this->usuario_id = $usuario_id;
	       $this->valoracion = $valoracion;
	       
	   }
	   }
	   ////////////////////////////////////////////////////////
	    class Perfil {

	   var $usuario_id;
	   var $persona_id;
	   var $imagen_id;
	   
	   function Perfil($usuario_id,$persona_id,$imagen_id) 
	   {
	       $this->usuario_id = $usuario_id;
	       $this->persona_id = $persona_id;
	       $this->imagen_id = $imagen_id;
	       
	   }
	   }


	?>





</body>
</html>