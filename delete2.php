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

    $sql = "DELETE FROM urgentmaintance
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: read2.php?success=successfully delete");
    } else {
        header("Location: read2.php?error=unknown erro occurred&$
            delivery_data");
    }
} else {
    header("Location: read2.php");
}