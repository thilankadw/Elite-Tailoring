/*<<<<<<< HEAD*/
/*image slide show function in carrer page*/ 
//alert("hello ");


///-----FAQ---///


var button = document.getElementById('mybtn');

button.addEventListener("click", function(){
    document.getElementById("faq-answer-1").style.display = "none";
})
<<<<<<< HEAD
>>>>>>> 33992cdb479a10a6377ddf4cf1540c426f6f1239


///--Contact Us--///

function enableButton(){

    var chkbx=document.getElementById("chkbx");

    if(chkbx.checked==true)
    {
        document.getElementById("btn").disabled=false;
    }

    else{
        document.getElementById("btn").disabled=true;
    }
=======
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
		
	
>>>>>>> 9239de77d30aa941aba5a20171ba87e62d0e1b17
}