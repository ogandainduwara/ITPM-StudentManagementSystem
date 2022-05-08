<?php

if (isset($_POST['save'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    $fname = validate($_POST['aname']);
    
    //  $aname=addcslashes($_POST['aname']);

      if(isset($_FILES['dp']['name'])){

      
      $dp=$_FILES['dp']['name'];
      $ext=explode(".",$dp);
      $cn=count($ext);
      if($ext[$cn-1]=='jpg'|| $ext[$cn-1]=='pdf'|| $ext[$cn-1]=='png'|| $ext[$cn-1]=='jpeg'){

      
      $tm=$_FILES['dp']['temp_name'];
      move_uploaded_file($tm,"/PDF",$dp);

      $user_data = 'aname=' . $aname . '&dp=' . $dp;


        $sql = " INSERT INTO  assigment(aname,dp) VALUES('$aname','$dp')";


        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully create');
        } else {

            header('Location:../index.php?error=unknown error occurred&$user_data');
        }

//$conn->query($sql);
    
     
    }

//$result = mysqli_query($conn, $sql);

}
