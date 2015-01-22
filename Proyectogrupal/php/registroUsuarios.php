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
	<h3 class="titulo">Nuevo registro de usuario</h3>
	<a href="../index.php" title="Inicio"> 
	    <img src="../img/home.png" width="60px" height="60px" style="margin-left:1300px; margin-top:-70px;">
	    </a>
</div>

<div id="divregistro">
	<div id="empresa">

		<form action="guardarUsuario.php" method="post" enctype="multipart/form-data">
			<legend id="top">Registro Del Usuario</legend>
			
			<fieldset>
			<p>Nombre</p>
			<input class="form-control" type="text" name="nombre" required>
			
			<p>Apellido</p>
			<input class="form-control" type="text" name="apellido" required>
			
			<p>Correo</p>
			<input class="form-control" type="text" name="correo" required>
				
			<p >Usuario</p>
			 <input type="text" class="form-control"  name="usuario" placeholder="Ingresa un Usuario" required>
			
		    <br>
		    <p>Contrase&ntildea</p>
			 <input type="password" class="form-control"  name="contrasena" placeholder="Ingresa tu Contrasena" required>
			
		    <p>Imagen</p>
			<input  type="file" name="file"><br>
			
		    <br>
			 <input style="margin-top: -10px; margin-left:230px;" name="accion"  type="submit"  class="btn btn-success" value="Guardar"  />
			</fieldset>
		</form>
	</div>


 <form id="login" method="post" action="../login/verificar.php" style="margin-top:-505px;">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<legend id="top">Entrar</legend>
		<p class="color" for="usuario" >Usuario<br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" class="form-control"  ><br>
		<p class="color" for="password">Contrase&ntildea<br>
		<input type="password" id="password" name="Contrasena" placeholder="password" class="form-control"><br>
		<input type="submit" name="aceptar" value="Entrar" class="btn btn-success">
		
	</form>


</div>

<img src="../css/red.jpg" style="margin-top:-860px; height: 350px;">

</body>

</html>