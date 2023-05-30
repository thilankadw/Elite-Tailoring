/*<<<<<<< HEAD*/
/*image slide show function in carrer page*/ 
//alert("hello ");


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