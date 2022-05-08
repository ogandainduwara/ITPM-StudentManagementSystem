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

    $mainid = validate($_POST['mainid']);
    $clientid = validate($_POST['clientid']);
    $lastmain = validate($_POST['lastmain']);
    $reason = validate($_POST['reason']);
    //$delichar=validate($_POST['delichar']);

    $user_data = 'mainid=' . $mainid . '&clientid=' . $clientid . '&lastmain=' . $lastmain . '&reason' . $reason;

    if (empty($mainid)) {
        header('Location:../index2.php?error=Maintance ID is  required&$user_data');
    } elseif (empty($clientid)) {
        header('Location:../index2.php?error=Client ID is  required&$user_data');
    } elseif (empty($lastmain)) {
        header('Location:../index2.php?error=Last maintance Day  is  required&$user_data');
    } elseif (empty($reason)) {
        header('Location:../index2.php?error=Reason is  required&$user_data');
    } else {

        $sql = " INSERT INTO  urgentmaintance(mainid,clientid,lastmain,reason) VALUES('$mainid','$clientid','$lastmain','$reason')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read2.php?success=successfully create');
        } else {

            header('Location:../index2.php?error=unknown error occurred&$user_data');
        }
    }
}
