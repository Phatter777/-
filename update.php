<?php
include('connect.php');
$sql = "UPDATE movie1 SET
movie_name = '{$_POST['movie_name']}',
movie_date = '{$_POST['movie_date']}' 
WHERE movie_id = '{$_POST['movie_id']}'";
if ($con->query($sql) === TRUE) {
    header("Location: table.php");
}else{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>