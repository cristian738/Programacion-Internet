$(document).ready(function(){

	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('../admin/ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			
		});
		
	});

	$(".eliminarperfil").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('../admin/ejecuta.php',{
			Caso:'EliminarPerfil',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			
		});
		
	});

	$(".modificar").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var descripcion=$(this).parent('td').parent('tr').find('.mas').val();
		var direccion=$(this).parent('td').parent('tr').find('.direccion').val();
		var latitud=$(this).parent('td').parent('tr').find('.latitud').val();
		var longitud=$(this).parent('td').parent('tr').find('.longitud').val();
		$.post('./ejecuta.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Descripcion:descripcion,
			Direccion:direccion,
			Latitud:latitud,
			Longitud:longitud
		},function(e){
			alert(e);
		});
		
	});


		$(".modificarperfil").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var apellido=$(this).parent('td').parent('tr').find('.apellido').val();
		var correo=$(this).parent('td').parent('tr').find('.correo').val();
		var usuario=$(this).parent('td').parent('tr').find('.usuario').val();
		var contrasena=$(this).parent('td').parent('tr').find('.contrasena').val();
		$.post('../admin/ejecuta.php',{
			Caso:'ModificarPerfil',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Apellido:apellido,
			Correo:correo,
			Usuario:usuario,
			Contrasena:contrasena
		},function(e){
			alert(e);
		});
		
	});

});