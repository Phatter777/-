<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <title>รายการภาพยนต์</title>
</head>

<?php
include('connect.php');

$sql = "SELECT * FROM movie1";
$result = $con -> query($sql);


if(isset ($_GET['search_click'])){
  $sql = "SELECT * FROM movie1 WHERE movie_id LIKE '%{$_GET['search']}%' OR movie_name LIKE '%{$_GET['search']}%' ";
}
$result = $con->query($sql);
?>


<body>
  <!--ค้นหา-->
  <br>
  <form action="" method ="get" style ="width: 20rem; margin-left:2%;" >

  <div class="mb-3">
    <input type = "hiden" class ="form-control" name="search" id="search" placeholder ="ค้นหา">
  
  </div>
  <button type ="submit" class = "btn btn-primary" name ="search_click">ค้นหา</button>
</form>

  <div class="container">

    <table class="table">
        <thead>
          <tr>
            <th>รหัสภาพยนต์</th>
            <th>ชื่อภาพยนต์</th>
            <th>เวลาที่เริ่มฉาย</th>
            <th>ผู้ใช้งาน</th>
            <th>รหัสผ่าน</th>
            <th>อื่นๆ</th>
          </tr>
        </thead>
        <tbody>
<?php
  while($row = mysqli_fetch_array($result)) {
?>

          <tr>
            <td scope="row"><?php echo $row['movie_id'];?></td>
            <td><?php echo $row['movie_name'];?></td>
            <td><?php echo $row['movie_date'];?></td>
            <td><?php echo $row['movie_user'];?></td>
            <td><?php echo $row['movie_pin'];?></td>
            <td><div class="btn-group" role="group" aria-label="Basic example">
            <a href="update_form.php?movie_id=<?php echo $row['movie_id'];?>"><button type="button" class="btn btn-primary">แก้ไข</button></a>
            <a href="delete.php?movie_id=<?php echo $row['movie_id'];?>"><button type="button" class="btn btn-primary">ลบ</button></a>
          </div></td>
          </tr>
<?php          
  }
?>
        </tbody>
      </table>
      <!--เพิ่มข้อมูล-->
      <div class = "container">
      <a href="insert_form.html"><button type="button" class="btn btn-info">เพิ่มข้อมูล</button></a>
      </div>

      <br>
      <br>

      <form action="login.php" method="post">
      <button type ="submit" name ="logout" class="btn btn-success">ออกจากระบบ</button>
      </form>
</body>
</html>