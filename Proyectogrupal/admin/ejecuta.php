<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("DELETE FROM lugares WHERE Id=".$_POST['Id']);
		unlink("../img/".$_POST['Imagen']);
		
	}
	if($_POST['Caso']=="Modificar"){
		mysql_query("UPDATE lugares SET Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE lugares SET Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE lugares SET Direccion='".$_POST['Direccion']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE lugares SET Latitud='".$_POST['Latitud']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE lugares SET Longitud='".$_POST['Longitud']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';	
	}

	if($_POST['Caso']=="EliminarPerfil"){
		mysql_query("DELETE FROM usuarios WHERE Id=".$_POST['Id']);
		unlink("../img/".$_POST['Imagen']);
		
	}
	
	if($_POST['Caso']=="ModificarPerfil"){
		mysql_query("UPDATE usuarios SET Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE usuarios SET Apellido='".$_POST['Apellido']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE usuarios SET Correo='".$_POST['Correo']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE usuarios SET Usuario='".$_POST['Usuario']."' where Id=".$_POST['Id']);
		mysql_query("UPDATE usuarios SET Contrasena='".$_POST['Contrasena']."' where Id=".$_POST['Id']);
		echo 'El Usuario se ha modificado';	
	}

?>