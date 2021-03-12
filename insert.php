<?php
include('connect.php');

$query = "INSERT INTO movie1 (movie_id,movie_name,movie_date,movie_user,movie_pin)
VALUES ('{$_POST['movie_id']}','{$_POST['movie_name']}','{$_POST['movie_date']}','{$_POST['movie_user']}','{$_POST['movie_pin']}')";
$result = mysqli_query($con,$query);


if($result == TRUE ){
  header("Location: table.php");
}else{
    echo "ไม่สามารถเพิ่มรายชื่อได้";
}

?>