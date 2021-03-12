<?php
include('connect.php');

    $query = "DELETE FROM movie1 WHERE movie_id = '{$_GET['movie_id']}'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location: table.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    ?>