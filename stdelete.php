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

    $sql = "DELETE FROM studentregister
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: stread.php?success=successfully delete");
    } else {
        header("Location: stread.php?error=unknown erro occurred&$
            delivery_data");
    }
} else {
    header("Location: stread.php");
}
