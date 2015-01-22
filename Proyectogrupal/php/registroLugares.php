
<?
session_start();
include "../conexion.php";
if(isset($_SESSION['Usuario'])){

}else{
	header("Location: ./index.php?Error=Acesso denegado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro de Lugares </title>
	<link rel="Shortcut Icon" href="../img/paz.ico" >
	<link rel="stylesheet" href="../css/estyloLogin.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	
</head>
<body id="fondo">

<div>
	<img src="../css/linea.png" style="height: 100px; width :1400px;">
	<h3 class="titulo">Nuevo registro de lugar</h3>
	<a href="../index.php" title="Inicio"> 
	    <img src="../img/home.png" width="60px" height="60px" style="margin-left:1300px; margin-top:-70px;">
	    </a>
</div>



<div id="divregistro">

	<div id="empresa">

		<form action="usuario.php" method="post" enctype="multipart/form-data">
			<legend id="top">Informaci&oacuten del lugar</legend>
			
			<fieldset>
			<p>Nombre</p>
			<input class="form-control" type="text" name="nombre" required>
			
			<p>Descrci&oacuten</p>
			<input class="form-control" type="text" name="descripcion" required>
			
			<p>Direcci&oacuten</p>
			<input class="form-control" type="text" name="direccion" required>
				
			
			<p>Imagen</p>
			<input  type="file" name="file">
			<br>
			


			<a href="http://www.agenciacreativa.net/coordenadas_google_maps.php" target="_blank" class="foto"> Busca tu Latitud y Longitud </a>
		    
		    <br>
			<p style="margin-top:20px;">Latitud</p>
			 <input type="text" class="form-control"  name="latitud" placeholder="latitud" required>
			
		    <p style="margin-top:20px;">Longitud</p>
			 <input type="text" class="form-control"  name="longitud" placeholder="longitud" required>
			
		    
		    <br>
			 <input style="margin-top: -10px; margin-left:230px;" name="accion"  type="submit"  class=" btn btn-success" value="Guardar"  />
			 
			</fieldset>
		</form>
	</div>

</div>


<img src="../img/localizacion.png" style="margin-top:-860px; margin-left: 700px; height: 350px;">



</body>

</html>