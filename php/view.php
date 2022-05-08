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



    $sql = "SELECT * FROM univarsity WHERE id=$id";

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

    $yname = validate($_POST['yname']);
    $yfaculty = validate($_POST['yfaculty']);
    $ycourse = validate($_POST['ycourse']);
  

    $id = validate($_POST['id']);


    if (empty($yname)) {
        header('Location:../update.php?id=$id&error=Maintance ID is  required');
    } elseif (empty($yfaculty)) {
        header('Location:../update.php?id=$id&error=Client ID  is  required');
    } elseif (empty($ycourse)) {
        header('Location:../update.php?id=$id&error=Last maintance Day is  required');
    } else {

        $sql = " UPDATE  univarsity
     SET yname='$yname',yfaculty='$yfaculty',ycourse='$ycourse'
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
