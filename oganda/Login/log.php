<?php 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$FullName =  "";
$password = "";
$username_err = "";
$password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["FullName"]))){
        $username_err = "Please enter username.";
    } else{
        $FullName = trim($_POST["FullName"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE FullName = '".$FullName."' AND Password1='".$password."'";
		$result = mysqli_query($db,$sql);
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if(!is_null($user)){
			$_SESSION["loggedin"] = true;
            $_SESSION["id"] = $user['id'];
            $_SESSION["FullName"] = $user['FullName']; 
			
			// Redirect user to welcome page
			header("location: welcome.php");
			exit();
		}else{
			$password_err = "The password you entered was not valid.";
		}

        
       
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/styleslogin.css">
	
	<script src="js/myScriptLogin.js"></script>
	
</head>
<body>

	<div class="login">
		<h2> Login </h2>
		<div class="Left-box" >
           
			<form action="" method="post">
            <div class=" <?php echo (!empty($username_err)) ?'has-error' : ''; ?>">
            Username or Email*
			<br>
			<input type="text" id="user" value="" name="FullName" placeholder="Username or Email" reqired/>
            <span class="help-block"><?php if(isset($username_err)){ echo $username_err;} ?></span>
            <br><br>
</div>
			Password
            <br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <input type="password" id="pwd" name="password" placeholder="Password" reqired/>
            <span class="help-block"><?php if(isset($password_err)){ echo $password_err;} ?></span>
			<br><br><br>
			<input type="Submit" id="submit" value="Login" >
			
			</form>
		</div>
		<div class="Right-box">
			- or -
			<br><br>
			<a href="https://www.facebook.com" class="fa fa-facebook">
			Login With Facebook	</a> <br><br>
			<a href="https://accounts.google.com/signin/v2/sl/pwd?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google">
			Login With Google+	</a>
			<br><br>
			<a href=".register.php" id="signin">Sign in </a>
		</div>
	</div>
</body>
</html>