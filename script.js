/*<<<<<<< HEAD*/
/*image slide show function in carrer page*/ 
alert("hello ");

var imgIndex=0;
carousel(); 
function carousel(){

    var i;
    var x=document.getElementsByClassName("myslides");
    for(i=0;i<x.length;i++){
        x[i].style.display="none";
       
    }
    
    imgIndex++;
     if(imgIndex>x.length){
     imgIndex=1;

     }
    x[imgIndex-1].style.display="block";
    setTimeout(carousel,2500);
}

///-----FAQ---///


var button = document.getElementById('mybtn');

button.addEventListener("click", function(){
    document.getElementById("faq-answer-1").style.display = "none";
})
//*>>>>>>> 33992cdb479a10a6377ddf4cf1540c426f6f1239*/
/* enable botton function in career-registration page*/
function enableButton(){
	var chBox=document.getElementById("ld");
	
	if(chBox.checked==true){
		document.getElementById("btnSubmit").disabled=false;
	}
    else{
		document.getElementById("btnSubmit").disabled=true;
	}	
		
	
}