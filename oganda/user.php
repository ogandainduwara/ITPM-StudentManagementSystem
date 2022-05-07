<?php

  require_once "config.php";

    $Full_Name="";
    $Student_Number="";
    $year="";
    $Gender=""; 
    $errors=array();

    
 if(isset($_GET['FullName'])){ 
     //receive all input values from the from
     $Full_Name = mysqli_real_escape_string($db, $_GET['FullName']);
     $Student_Number = mysqli_real_escape_string($db, $_GET['StudentNumber']);
     $year = mysqli_real_escape_string($db, $_GET['year']);
     $Gender = mysqli_real_escape_string($db, $_GET['gender']);
     $Password1 = mysqli_real_escape_string($db, $_GET['Password1']);
     $Password2 = mysqli_real_escape_string($db, $_GET['Password2']);

  
       // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Full_Name)) { array_push($errors, "Full name is required"); }
  if (empty($Student_Number)) { array_push($errors, "Student number is required"); }
  if (empty($year)) { array_push($errors, "Year is required"); }
  if (empty($Gender)) { array_push($errors, "gender is required"); }
  if (empty($Password1)) { array_push($errors, "password is required"); }
  if (empty($Password2)) { array_push($errors, "Password is required"); }
  if ($Password1 != $Password2) {
	array_push($errors, "The two passwords do not match");
  }

  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE FullName='$Full_Name' OR Student_Number='$Student_Number' OR year='$year'  OR Gender='$Gender'   LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if ($user) { // if user exists
    if ($user['FullName'] == $Full_Name) {
      array_push($errors, "Username already exists");
    }

    if ($user['Student_Number'] == $Student_Number) {
      array_push($errors, "Student Number already exists");
    }
    if ($user['year'] == $year) {
        array_push($errors, "year already exists");
      }
    
      if ($user['Gender'] == $Gender) {
        array_push($errors, "Username already exists");
      }
  }
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (FullName,Student_Number, year,Gender,Password1,Password2) 
              VALUES('$Full_Name','$Student_Number','$year','$Gender','$Password1','$Password2')";
    mysqli_query($db, $query);
    $_SESSION['FullName'] = $Full_Name;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
   exit();
}
 }

?>