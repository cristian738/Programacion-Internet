<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Pagina Principal</title>
		<style type="text/css">

		#slidebox{
			position:relative; 
			margin:40px auto;
			overflow:hidden;
		}
		#car{
			display: inline-block;
		}
		#slidebox, #slidebox ul {
			width:600px;
			height:300px;
		}
		#slidebox, #slidebox ul li{
			width:943px;
			height:300px;
		}
		#slidebox ul li{
			position:relative;
			 left:0; 
			 float:left;
			 list-style: none;
			 padding:0px 0px; 
			 font-family:Californian FB, sans-serif;
			 font-size:50px;
			}

		#slidebox .next, #slidebox .previous{
			position:absolute; 
			z-index:2; 
			display:block; 
			width:21px; 
			height:21px;
			top:139px;
		}
		#slidebox .next{
			right:0; 
			margin-right:10px; 
			background:url(./img/slidebox_next.png) no-repeat left top;
		}	
		#slidebox .next:hover{
			background:url(./img/slidebox_next_hover.png) no-repeat left top;
		}
		#slidebox .previous{
			margin-left:10px; 
			background:url(./img/slidebox_previous.png) no-repeat left top;
		}
		#slidebox .previous:hover{
			background:url(./img/slidebox_previous_hover.png) no-repeat left top;
		}
		#slidebox .thumbs{
			position:absolute;
			 z-index:2; 
			 bottom:10px; 
			 right:10px;
			}
		#slidebox .thumbs a{
			display:block; 
			margin-left:10px; 
			float:left; 
			font-family:Verdana, Geneva, sans-serif; 
			font-size:10px; 
			text-decoration:none; 
			padding:2px 4px; 
			background:url(./img/slidebox_thumb.png); 
			color:#fff;
		}
		#slidebox .thumbs a:hover{
			background:red; 
			color:#000;
		}
		#slidebox .thumbs .thumbActive{
			background:#fff; 
			color:#000; 
			display:block; 
			margin-left:5px; 
			float:left; 
			font-family:Verdana, Geneva, sans-serif; 
			font-size:9px; 
			text-decoration:none; 
			padding:2px 4px;
		}

		</style>
		<link rel="stylesheet" href="css/style.css" type="text/css" /> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/otro.css">
		<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="js/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
		<script type="text/javascript">



		$(function() {
			$("#slidebox").jCarouselLite({
				vertical: false,
				hoverPause:true,
				btnPrev: ".previous",
				btnNext: ".next",
				visible: 1,
				start: 0,
				scroll: 1,
				circular: true,
				auto:1000,
				speed:1400,				
				btnGo:
				    [".1", ".2",
				    ".3", ".4",".5"],
				
				afterEnd: function(a, to, btnGo) {
						if(btnGo.length <= to){
							to = 0;
						}
						$(".thumbActive").removeClass("thumbActive");
						$(btnGo[to]).addClass("thumbActive");
				    }
			});
		});

		</script>


		<link rel="shortcut icon" href="img/tierra.gif"> 
	</head>



<body>

<div id="div-midle">

	
	<div id="div-arriba">

		<img src="img/tierra.gif" style=" width:100px; height:100px;margin-left:50px;" />
		<h1 style="margin-top: -70px;margin-left:400px;color: white; ">Encuentra tu lugar favorito!</h1>

				
	</div>
	<div class="div-medio">

	 		 
		<div class="perfil" style="margin-top:5px; margin-left:70px;">
			<a href="./php/perfil.php" title="Mira Tu Perfil"   title="empresa"> 
				 <img src="./img/perfil.png" width="50px" height="50px">
			</a>
		</div> 
		<div class="buscar" style="margin-top:5px;">
			<a href="./admin/buscar.php" title="Buscar Lugares"   title="empresa"> 
				 <img src="./img/buscar.png" width="110px" height="35px" >
			</a>
		</div> 
		<div class="modificar">
			<a href="./admin/modificar.php" title="Modificar Lugares"   title="empresa"> 
				 <img src="./img/modi.png" width="80px" height="70px">
			</a>
		</div> 
		<div class="mapalupa">
			<a href="./comentarios/map/markers.php" title="Ver Lugares En El Mapa"   title="empresa"> 
				 <img src="./img/mapalupa.png" width="80px" height="60px">
			</a>
		</div>

		<div class="registrarte">
		<a href="./php/registroUsuarios.php"  title="Registrate Como Usuario"   title="empresa"> 
			 <img src="./img/usuario.png" width="110px" height="50px">
		</a>
	
		</div>
		<div class="Re-lugares">
		<a href="./php/registroLugares.php" title="Registra Un Lugar"   title="empresa"> 
			 <img src="./img/nuevo.gif" width="80px" height="80">
		</a>
			
		</div>
	 	

		
		

	</div>
		


	


		<div id="slidebox">

			<div class="next"></div>
			<div class="previous"></div>
			<div class="thumbs">
				<a href="#" onClick="" class="1 thumbActive">1</a> 
				<a href="#" onClick="" class="2">2</a> 
				<a href="#" onClick="" class="3 ">3</a> 
				<a href="#" onClick="" class="4">4</a> 
				<a href="#" onClick="" class="5">5</a></div>
				<ul>
			    	<li>Restaur&aacutentes<br><a  href="img/kiwi.jpg" alt=""><img id="borde-imagenes" src="img/kiwi.jpg" alt=""style="height:200px; width:300; margin-left:100px;" class="img-rounded"  /></a>
			    	<a href="img/estella.jpg" alt=""><img id="borde-imagenes" src="img/estella.jpg" alt=""style="height:200px; width:300;margin-left:100px" class="img-rounded"/></a></li>


					<li>Parques<br><a href="img/revolucion.jpg" alt=""><img id="borde-imagenes"  src="img/revolucion.jpg" alt=""style="height:200px;width:300;  margin-left:100px;"class="img-rounded"/></a>
					<a href="img/pajaros.jpg" alt=""><img id="borde-imagenes" src="img/pajaros	.jpg" alt=""style="height:200px;width:300;margin-left:100px"class="img-rounded"/></a></li>


					<li>Playas<br><a href="img/cola.jpg" alt=""><img id="borde-imagenes" src="img/cola.jpg" alt=""style="height:200px;width:300; margin-left:100px;"class="img-rounded"/></a>
					<a href="img/teco.jpg" alt=""><img id="borde-imagenes" src="img/teco.jpg" alt=""style="height:200px;width:300;margin-left:100px"class="img-rounded"/></a></li>


					<li>Antros<br><a href="img/rollo.jpg" alt=""><img id="borde-imagenes" src="img/rollo.jpg" alt=""style="height:200px;width:300; margin-left:100px;"class="img-rounded"/></a>
					<a href="img/antro.jpg" alt=""><img id="borde-imagenes" src="img/antro.jpg" alt=""style="height:200px;width:300;margin-left:100px"class="img-rounded"/></a></li>


					<li>Comercios<br><a href="img/plaza.jpg" alt=""><img id="borde-imagenes" src="img/plaza.jpg" alt=""style="height:200px;width:300;margin-left:100px"class="img-rounded"/></a>
					<a href="img/plazas.jpg" alt=""><img id="borde-imagenes" src="img/plazas.jpg" alt=""style="height:200px;width:300;margin-left:100px"class="img-rounded"/></a></li>
				</ul>
	</div>

	<section>
	<div class="lugardescripcion">Encuentra Tu Lugar Favorito</div>
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from lugares")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>

		<div class="producto">
			<center>
				<img src="./img/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<a  href="./detalles.php?id=<?php echo $f['id'];?>" class="enlaceboton">Ver</a>
			</center>
		</div>

	<?php
		}
	?>
	</section>


	

 </body>
 </html>
