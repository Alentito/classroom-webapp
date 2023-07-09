const menu=document.getElementById("menubtn");
menu.addEventListener("click",show);

var modal=document.getElementById("modal1");

function show(){
	var modal=document.getElementById("modal1");
modal.style.display="block";

}


window.onclick=function(event){
	if(event.target == modal)
	{
		modal.style.display="none";
	}
}