var boton1 =document.getElementById('entra');

var div1=document.getElementById('body');

var div2=document.getElementById('div-midle');



div2.style.display='none';

div1.style.display='inline-block';

	boton1.addEventListener('click',function(){

		div1.style.display='none';
		div2.style.display='inline-block';	

	});







