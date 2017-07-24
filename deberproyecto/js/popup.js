var popup= document.getElementById('popup');
var btn=document.getElementById('miboton');
var cerrar=document.getElementById('close');
btn.onclick=function(){
	popup.style.display="block";
}
window.onclick=function(event){
	if(event.target==popup){
		popup.style.display="none";
	}
}
cerrar.onclick=function(){
	popup.style.display="none";
}