<?php

if (isset($_POST['create'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $sname = validate($_POST['sname']);
    $dob = validate($_POST['dob']);
    $gender = validate($_POST['gender']);
    $smail = validate($_POST['smail']);
    $saddress = validate($_POST['saddress']);
    $sschool = validate($_POST['sschool']);
    $ftype = validate($_POST['ftype']);
    $ctype = validate($_POST['ctype']);
    $phone = validate($_POST['phone']);

    $user_data = 'sname=' . $sname . '&dob=' . $dob . '&smail=' . $smail .  '&saddress=' . $saddress .  '&sschool=' . $sschool . '&ftype=' . $ftype . '&ctype=' . $ctype . '&phone=' . $phone;

    if (empty($sname)) {
        header('Location:../studentregi.php?error=Email is  required&$user_data');
    } elseif (empty($dob)) {
        header('Location:../studentregi.php?error=DOB is  required&$user_data');
    
    } elseif (empty($smail)) {
        header('Location:../studentregi.php?error=Email  is  required&$user_data');
    } elseif (empty($saddress)) {
        header('Location:../studentregi.php?error=Address  is  required&$user_data');
    } elseif (empty($sschool)) {
        header('Location:../studentregi.php?error=school  is  required&$user_data');
    } elseif (empty($ftype)) {
        header('Location:../studentregi.php?error=Faculty type  is  required&$user_data');
    } elseif (empty($ctype)) {
        header('Location:../studentregi.php?error=Course Type  is  required&$user_data');
    } elseif (empty($phone)) {
        header('Location:../studentregi.php?error=Mobile Number is  required&$user_data');
    } else {

        $sql = " INSERT INTO  studentregister(sname,dob,gender,smail,saddress,sschool,ftype,ctype,phone) VALUES('$sname','$dob','$gender','$smail','$saddress','$sschool','$ftype','$ctype','$phone')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../stread.php?success=successfully create');
        } else {

            header('Location:../studentregi.php?error=unknown error occurred&$user_data');
        }
    }
}
