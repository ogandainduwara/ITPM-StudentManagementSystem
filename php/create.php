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

    $yname = validate($_POST['yname']);
    $yfaculty = validate($_POST['yfaculty']);
    $ycourse = validate($_POST['ycourse']);
    

    $user_data = 'yname=' . $yname . '&yfaculty=' . $yfaculty . '&ycourse=' . $ycourse;

    if (empty($yname)) {
        header('Location:../index.php?error=Your Name is  required&$user_data');
    } elseif (empty($yfaculty)) {
        header('Location:../index.php?error=Your Faculty is  required&$user_data');
    } elseif (empty($ycourse)) {
        header('Location:../index.php?error=Your Course  is  required&$user_data');
    } else {

        $sql = " INSERT INTO  univarsity(yname,yfaculty,ycourse) VALUES('$yname','$yfaculty','$ycourse')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully create');
        } else {

            header('Location:../index.php?error=unknown error occurred&$user_data');
        }
    }
}
