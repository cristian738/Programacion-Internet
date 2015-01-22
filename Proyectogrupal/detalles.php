<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8"/>
	<title>Detalles del Lugar</title>
	<link rel="Shortcut Icon" href="img/paz.ico" >
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<body id="fondo">
	<header>
		<h1>Conoce Tu Lugar </h1>
		
		<a href="./" title="Inicio"> 
	    <img src="./img/home.png" width="70px" height="90px">
	    </a>
	</header>

	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from lugares where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>

		<span class="descripcion"><?php echo $f['nombre'];?></span> <br></br>
		<span class="descripcion">Descripcion: <?php echo $f['descripcion'];?></span><br>
			<center>
				<img src="./img/<?php echo $f['imagen'];?>"><br>
				<span class="descripcion">Direccion: <?php echo $f['direccion'];?></span><br>
				
			</center>
		
	<?php
		}
	?>

	<form method="post" action="">
	<center>
		<input type="text" name="usuario"  placeholder="Usuario">
		<input type="text" name="comentario"  placeholder="Comentario">
		<input type="text" name="puntuacion"  placeholder="Puntuacion 1-10">
		<input type="submit" name="enviar" value="Publicar">
	</center>
	</form>

	<table width="60%" class="foto">
			<tr><td>Comentarios</td></tr>
			<tr>
				<td>***********</td>
				<td>Usuario</td>
				<td>Comentario</td>
				<td>Puntuacion</td>
				\
			</tr>
			
	<?php
		$consulta=mysql_query("select * from comentarios")or die(mysql_error());
		while ($row=mysql_fetch_array($consulta))
		 {
		 	echo '
		 		<tr>
		 		<td>
					</td>
					<td><input type="text" class="Comentario" value="'.$row[1].'"></td>
					<td><input type="text" class="mas" value="'.$row[2].'"></td>
					<td><input type="text" class="Puntuacion" value="'.$row[3].'"></td>
		 		</tr>
		 	';
			
		}
	?>
	</table>
	

	<?php
		if (isset($_POST['enviar'])) {
			$usuario = $_POST['usuario'];
			$comentario = $_POST['comentario'];
			$puntuacion = $_POST['puntuacion'];
			if ($usuario == '' or $comentario == '' or $puntuacion == '' ) {
				echo "No se puede dejar vacio los campos";
			}else{
				$insertar=mysql_query("INSERT INTO comentarios (usuario,comentario,puntuacion) VALUES ('".$usuario."','".$comentario."','".$puntuacion."')")or die(mysql_error());
				echo "Comentario Guardado";

			}
		}
	?>
	
		
	</section>

</body>
</html>