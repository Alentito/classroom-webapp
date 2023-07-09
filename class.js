const add =document.querySelector(".add");
add.addEventListener("click",pop);



const addbtn = document.querySelector(".add_btn");
const divcontain=document.getElementById("container");

addbtn.addEventListener("click",Addnew);

var close=document.querySelector(".close");
close.addEventListener("click",close);


function close(){

}

function pop()
{
	var x= document.getElementById("modal");
	
    if(x.style.display==="none")
    {
        x.style.display = "block";
    }
    else
    {
        x.style.display ="none";
    }
}




function Addnew(){
	//create div element
	const newdiv = document.createElement("a");
	//create paragraph element to store title
	var title= document.createElement('p');
	var more=document.createElement('svg');
	more.innerHTML='<button class="close"><svg class="Path_11" viewBox="0 0 24 24"><path id="Path_11" d="M 0 0 L 24 0 L 24 24 L 0 24 L 0 0 Z"></path></svg><svg class="Path_22" viewBox="10 4 4 16"><path id="Path_22" d="M 12 8 C 13.10000038146973 8 14 7.099999904632568 14 6 C 14 4.900000095367432 13.10000038146973 4 12 4 C 10.89999961853027 4 10 4.900000095367432 10 6 C 10 7.099999904632568 10.89999961853027 8 12 8 Z M 12 10 C 10.89999961853027 10 10 10.89999961853027 10 12 C 10 13.10000038146973 10.89999961853027 14 12 14 C 13.10000038146973 14 14 13.10000038146973 14 12 C 14 10.89999961853027 13.10000038146973 10 12 10 Z M 12 16 C 10.89999961853027 16 10 16.89999961853027 10 18 C 10 19.10000038146973 10.89999961853027 20 12 20 C 13.10000038146973 20 14 19.10000038146973 14 18 C 14 16.89999961853027 13.10000038146973 16 12 16 Z"></path></svg></button>';
	///more.setAttribute("id","more");
	//naming class name for div element
	newdiv.classList.add('div-shadow');
	//setting id of title
	title.setAttribute("id","title");
	//adding inner html to display title name
	title.innerHTML='title';
	//title.innerHTML='<input type="text" name="titilename" />';
	//adding newdiv to container div
	divcontain.appendChild(newdiv);
	
	newdiv.appendChild(title);
	newdiv.appendChild(more);
	//newdiv.appendchild();
	
}
