
var inicio=function () {

	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.usuarios').remove();
		$.post('./js/eliminar.php',{
			Id:id
		},function(a){
			
			if(a=='0'){
				location.href="../php/perfil.php";
			}
		});

	});
}

$(document).on('ready',inicio);