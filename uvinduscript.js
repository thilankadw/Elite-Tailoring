

function checkSignPassword(){
	
	var  pass=document.getElementById("pass");
	
	var  compass=document.getElementById("compass");
	
	if(pass.value==compass.value)
	{
		alert("Sign In Success");
		return true;
	}
	
	else{
		alert("Passwords Mismatched");
		return false;
	}
	
}



function enableButtonSign(){
	
	var chckbxsign=document.getElementById("chkbxsign");
	
	if(chckbxsign.checked== true){
		document.getElementById("btnsign").disabled=false;
	}
	
	else{
		document.getElementById("btnsign").disabled=true;
	}
}

