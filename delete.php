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

    $sql = "DELETE FROM univarsity
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: read.php?success=successfully delete");
    } else {
        header("Location: read.php?error=unknown erro occurred&$
            delivery_data");
    }
} else {
    header("Location: read.php");
}
