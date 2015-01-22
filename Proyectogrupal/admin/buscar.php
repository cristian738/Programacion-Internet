<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8"/>
	<title>Perfil</title>
	<link rel="Shortcut Icon" href="../img/paz.ico" >
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<body id="fondo">
	<header>
		<h1><center>Busqueda</center></h1>
		
		<a href="../index.php" title="Inicio"> 
	    <img src="../img/home.png" width="60px" height="60px" style="margin-top:20px">
	    </a>
	   
	</header>

	<section>
		
	<p>
		<form name="form1" method="post" action="buscar.php">
			<center><h2>Buscar Lugar</h2>
			<input name="busca" type="text" id="busqueda">
			<input name="submit" type="submit" value="Buscar">
			</center>
		</form>
	</p>

	<?php
		include '../conexion.php';
		$busca="";

		$busca= @ $_POST['busca'];
			if($busca!=""){
			$re=mysql_query("select * from lugares where nombre like '%".$busca."%'")or die(mysql_error());
		
		
		while ($f=mysql_fetch_array($re)) {
	?>

		<span class="descripcion"> Nombre: <?php echo $f['nombre'];?></span> <br></br>
		<span class="descripcion">Descripcion: <?php echo $f['descripcion'];?></span><br>
			<center>
				<img src="../img/<?php echo $f['imagen'];?>"><br>
				<span class="descripcion">Direccion: <?php echo $f['direccion'];?></span><br>
				
			</center>

		
	<?php
		}
	}
	?>
		
	</section>

</body>
</html>