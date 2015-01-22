

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8"/>
	<title>Perfil</title>
	<link rel="Shortcut Icon" href="../img/paz.ico" >
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" src="../admin/modificar.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>


</head>

<body id="fondo">
	<header>
		<h1>MODIFICAR / ELIMINAR Lugares</h1>
		
		<a href="../index.php" title="Inicio"> 
	    <img src="../img/home.png" width="60px" height="60px" style="margin-top:20px;">
	    </a>
	    
	</header>

	<section>
		
	
		<table width="100%">
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Direccion</td>
				<td>Latitud</td>
				<td>Longitud</td>
				<td>Eliminar</td>
				<td>Modificar</td>
			</tr>
		<?php 
			include '../conexion.php';
			$resultado=mysql_query("select * from lugares");
			while($row=mysql_fetch_array($resultado)){
				echo '
				<tr>
					<td>
						<input type="hidden" value="'.$row[0].'">'.$row[0].'
						<input type="hidden" class="imagen" value="'.$row[5].'">
					</td>
					<td><input type="text" class="nombre" value="'.$row[1].'"></td>
					<td><input type="text" class="mas" value="'.$row[2].'"></td>
					<td><input type="text" class="direccion" value="'.$row[3].'"></td>
					<td><input type="text" class="latitud" value="'.$row[4].'"></td>
					<td><input type="text" class="longitud" value="'.$row[5].'"></td>
					<td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>
					<td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td>
				</tr>
				';
			}
		?>
	</table>
		
	</section>

</body>
</html>