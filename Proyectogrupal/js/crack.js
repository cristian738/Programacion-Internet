 var botonpaz = document.getElementById('entra1');
var botcabo = document.getElementById('entra2');
var botcomon = document.getElementById('entra3');
var botmule = document.getElementById('entra4');
var botloreto = document.getElementById('entra5');


var divpaz = document.getElementById('mapPaz');
var divcabo = document.getElementById('mapCabo');
var divloreto = document.getElementById('mapLoreto');
var divmule = document.getElementById('mapMule');
var divcomundu = document.getElementById('mapComundu');


divcabo.style.display='none';
divloreto.style.display='none';
divmule.style.display='none';
divcomundu.style.display='none';



botonpaz.addEventListener('click',function(){
divcabo.style.display='none';	
divpaz.style.display='inline-block';
divmule.style.display='none';
divcomondu.style.display='none';
divloreto.style.display='none';
}
)

botcabo.addEventListener('click',function(){
divcabo.style.display='inline-block';	
divpaz.style.display='none';
divmule.style.display='none';
divcomondu.style.display='none';
divloreto.style.display='none';
})

botcomon.addEventListener('click',function(){
divcabo.style.display='none';	
divpaz.style.display='none';
divmule.style.display='none';
divcomondu.style.display='inline-block';
divloreto.style.display='none';

})

botmule.addEventListener('click',function(){
divcabo.style.display='none';	
divpaz.style.display='none';
divmule.style.display='inline-block';
divcomondu.style.display='none';
divloreto.style.display='none';

})

botloreto.addEventListener('click',function(){
divcabo.style.display='none';	
divpaz.style.display='none';
divmule.style.display='none';
divcomondu.style.display='none';
divloreto.style.display='inline-block';

})
