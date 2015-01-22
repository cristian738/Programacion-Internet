 <!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8"/>
	<title>Perfil de usuario</title>
	<link rel="Shortcut Icon" href="../img/tierra.gif" >
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" src="../admin/modificar.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<link rel="stylesheet" href="../css/estyloLogin.css">


</head>

<body id="fondo">
	<div>
	<img src="../css/linea.png" style="height: 100px; width :1420px;">
		<h3 class="titulo">Tu Usuario</h3>
			<a href="../index.php" title="Inicio"> 
		    <img src="../img/home.png" width="60px" height="60px" style="margin-left:1300px; margin-top:-200px;">
	    	</a>

	    <a href="../php/cerrar.php" title="Cerrar Sesion"> 
	    <img src="../img/salir.png" width="90px" height="30px"  style="margin-top:0px; margin-left:1280px;"> 
	    </a>
	</div>





	<section>
		
<table class="foto" width="100%">
			<tr>
				<td></td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Correo</td>
				<td>Usuario</td>
				<td>Contrasena</td>
				<td>Eliminar</td>
				<td>Modificar</td>
			</tr>

	<?php
		
		include '../conexion.php';
		$re=mysql_query("select * from usuarios ")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>

		<span class="descripcion"> Nombre: <?php echo $f['nombre'];?></span> <br></br>
		<span class="descripcion">Apellido: <?php echo $f['apellido'];?></span><br>
			<center>
				<img src="../img/<?php echo $f['imagen'];?>"><br>
				<span class="descripcion"> <?php echo $f['correo'];?></span><br>
				
			</center>
			<h4 class="foto">Modifica Tu Perfil</h4>
		
	<?php
	echo '
				<tr>
					<td>
						
						<input type="hidden" class="imagen" value="'.$f[5].'">
					</td>
					<td><input type="text" class="nombre" value="'.$f[1].'"></td>
					<td><input type="text" class="apellido" value="'.$f[2].'"></td>
					<td><input type="text" class="correo" value="'.$f[3].'"></td>
					<td><input type="text" class="usuario" value="'.$f[4].'"></td>
					<td><input type="text" class="contrasena" value="'.$f[5].'"></td>
					<td><button class="eliminarperfil" data-id="'.$f[0].'">Eliminar</button></td>
					<td><button class="modificarperfil" data-id="'.$f[0].'">Modificar</button></td>
				</tr>
				';
		}
	?>
	</table>
		
	</section>

</body>
</html>