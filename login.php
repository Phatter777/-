<?php
    require_once('connect.php');
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie1 WHERE movie_user = '{$_POST['movie_user']}' AND movie_pin = '{$_POST['movie_pin']}'";
    
        $result = $con->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["movie_user"] = $row['movie_user'];
            Header("Location: table.php");
        } else {
            echo "<p>รหัสผิด<p>";
        }
    }

        if(isset($_POST['logout'])) {
            session_unset();
            header("Location: table.php");
        }
        
        if(isset($_SESSION['movie_pin'])) {
            require_once("table.php");
        }else{
            require_once("table.php");
        }
    ?>