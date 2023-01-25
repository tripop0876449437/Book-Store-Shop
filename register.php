<?php
  include 'config.php';

  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('การเชื่อมต่อล้มเหลว');

    if(mysqli_num_rows($select_user) > 0){
      $message[] = 'มีผู้ลงชื่อเข้าสู่ระบบนี้แล้ว!';
    }else{
      if($password != $cpassword){
        $message[] = 'ยืนยันรหัสผ่านไม่ถูกต้อง!';
      }else{
        mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpassword', '$user_type')") or die('การเชื่อมต่อล้มเหลว');
        $message[] = 'มีผู้ลงชื่อเข้าสู่ระบบนี้แล้ว!';
        header('location:login.php');
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/navbar.css">
  <link rel="stylesheet" href="CSS/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>register</title>
</head>
<body>
          
    <!-- Header Success Section -->
  <?php
    if(isset($message)){
      foreach($message as $message){
        echo '
          <section class="header">
            <div class="container">
              <p>'.$message.'</p>
              <i class="fa fa-times-circle" aria-hidden="true" onclick="this.parentElement.remove();"></i>
            </div>
          </section>    
        ';       
      }
  ?>
    <META HTTP-EQUIV="Refresh" CONTENT="3;URL=login.php"> 
  <?php
    }
  ?>

  <!-- Header Register Section -->
  <?php include 'section/header.php'; ?>

  <!-- Register Section -->
  <section class="register">
    <div class="container">
      <h3 class="head-register">ลงทะเบียนเข้าระบบ</h3>
      <form action="" method="post">
        <div class="box1">
          <div class="value1">
            <h3>ชื่อของคุณ</h3>          
            <input type="text" name="name" placeholder="ใส่ชื่อของคุณ!" class="box" required>
          </div>
          <div class="value2">
            <h3>ประเภทของคุณ</h3> 
            <select name="user_type" class="box">
              <option value="user">ผู้ใช้</option>
              <option value="admin">แอดมิน</option>
            </select>  
          </div>
        </div>
        <div class="box2">
          <h3>อีเมลของคุณ</h3>
          <input type="email" name="email" placeholder="ใส่อีเมลของคุณ!" class="box" required> 
        </div>
        <div class="box3">
          <div class="value1">
            <h3>รหัสผ่านของคุณ</h3>
            <input type="password" name="password" placeholder="ตั้งรหัสผ่านของคุณ!" class="box" required>            
          </div>
          <div class="value2">
            <h3>ยืนยันรหัสผ่านของคุณ</h3>
            <input type="password" name="cpassword" placeholder="ยืนยันรหัสผ่านของคุณ!" class="box" required>
          </div>
        </div>
        <div class="box4">
          <input type="submit" name="submit" value="ลงทะเบียน" class="btn">
        </div>
        <div class="box5">
          <h3>ผู้ใช้งานเคยลงทะเบียนแล้ว <a href="login.php">ลงชื่อเข้าสู่ระบบ</a> </h3>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer Register Section -->
  <?php include 'section/footer.php'; ?>

</body>
</html>
