function validate(){
	var username = document.getElementById("user").value;
	var password = document.getElementById("pwd").value;
	
	if (username == "" || password == ""){
		alert("You can't leave empty sapaces!");
		return false;
	}
	else{
		return true;
	}

}