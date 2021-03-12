<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <title>แก้ไขรายการภาพยนต์</title>
</head>

<?php
    include("connect.php");
    $sql = "SELECT * FROM movie1 WHERE movie_id = '{$_GET['movie_id']}'";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<body>
    <form action="update.php" method="POST">
    <?php echo $row['movie_id'];?>

    <div class="col-auto">
        <label class="visuall-hidden" for="autoSizingSelect">กรุณาเลือกรหัส</label>
        <select class ="form-select" id="movie_id " name="movie_id"  value = "<?php echo $row['movie_id']?>">
        <option selected >Choose..รหัสภาพยนต์</option>
        <option value="1">0001</option>
        <option value="2">0002</option>
        <option value="3">0003</option>
        <option value="4">0004</option>
        <option value="5">0005</option>

    </select>
    </div>
        <br>
        <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInput">Name</label>
        <input type="text" class="form-control" id="movie_name"  name="movie_name" placeholder="กรุณาใส่ชื่อภาพยนต์" value = "<?php echo $row['movie_name']?>">
        </div>
        <br>
            <div class="col-auto">
            <label class="visually-hidden" for="autoSizingSelect">Name</label>
            <input type="datetime-local" class="form-control" id="movie_date"name= "movie_date" placeholder="กรุณาใส่วัน" value = "<?php echo $row['movie_date']?>">
            </div>
            <br>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    </div>

</body>
</html>