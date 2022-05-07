function validPwd(){
	var a = document.getElementById("pwd1").value;
	var b = document.getElementById("pwd2").value;
	
	if (a == b) {
	
	alert ("Matched");}
	
	else {
	
	alert("Un Matched!!");

}
}

function check(){

	if(document.getElementById("cb1").checked)
	{
		document.getElementById("sub1").disabled = false;
	}
	else
	{
		document.getElementById("sub1").disabled = true;
	}
}

