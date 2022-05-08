<?php

if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);



    $sql = "SELECT * FROM studentregister WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: stread.php");
    }
} elseif (isset($_POST['update'])) {
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
   
    

    $id = validate($_POST['id']);


    if (empty($sname)) {
        header('Location:../stupdate.php?id=$id&error=Maintance ID is  required');
    } elseif (empty($dob)) {
        header('Location:../stupdate.php?id=$id&error=Client ID  is  required');
    } elseif (empty($smail)) {
        header('Location:../stupdate.php?id=$id&error=Last maintance Day is  required');
    } elseif (empty($saddress)) {
        header('Location:../stupdate.php?id=$id&error=Client ID  is  required');
    } elseif (empty($sschool)) {
        header('Location:../stupdate.php?id=$id&error=Last maintance Day is  required');
    } elseif (empty($ftype)) {
        header('Location:../stupdate.php?id=$id&error=Client ID  is  required');
    } elseif (empty($ctype)) {
        header('Location:../stupdate.php?id=$id&error=Last maintance Day is  required');
    } elseif (empty($phone)) {
        header('Location:../stupdate.php?id=$id&error=Last maintance Day is  required');
    } else {

        $sql = " UPDATE  studentregister
     SET sname='$sname',dob='$dob',gender='$gender',smail='$smail',saddress='$saddress',sschool='$sschool',ftype='$ftype',ctype='$ctype',phone='$phone'
     WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../stread.php?success=successfully updated');
        } else {

            header('Location:../stupdate.php?id=$id&error=unknown error occurred&$user_data');
        }
    }
} else {
    header("Location: stread.php");
}
