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



    $sql = "SELECT * FROM liberarymember WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: read.php");
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

    $fname = validate($_POST['fname']);
    $stid = validate($_POST['stid']);
    $phone = validate($_POST['phone']);
    $acyear = validate($_POST['acyear']);
    $program = validate($_POST['program']);
    

    $id = validate($_POST['id']);


    if (empty($fname)) {
        header('Location:../update.php?id=$id&error=Maintance ID is  required');
    } elseif (empty($stid)) {
        header('Location:../update.php?id=$id&error=Client ID  is  required');
    } elseif (empty($phone)) {
        header('Location:../update.php?id=$id&error=Last maintance Day is  required');
    } elseif (empty($acyear)) {
        header('Location:../update.php?id=$id&error=Next Maintance Day is  required');
    } elseif (empty($program)) {
        header('Location:../update.php?id=$id&error=Next Maintance Day is  required');
    } else {

        $sql = " UPDATE  liberarymember
     SET fname='$fname',stid='$stid',phone='$phone',acyear='$acyear',program='$program'
     WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully updated');
        } else {

            header('Location:../update.php?id=$id&error=unknown error occurred&$user_data');
        }
    }
} else {
    header("Location: read.php");
}
