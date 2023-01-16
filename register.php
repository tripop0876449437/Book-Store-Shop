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
  <link rel="stylesheet" href="CSS/bk-theme.css">
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

  <!-- Register Section -->
  <section class="register">
    <div class="container">
      <form action="" method="post">
        <h3>ลงทะเบียนผู้ใช้งาน</h3>
        <input type="text" name="name" placeholder="ใส่ชื่อของคุณ!" class="box" required>
        <input type="email" name="email" placeholder="ใส่อีเมลของคุณ!" class="box" required>
        <input type="password" name="password" placeholder="ตั้งรหัสผ่านของคุณ!" class="box" required>
        <input type="password" name="cpassword" placeholder="ยืนยันรหัสผ่านของคุณ!" class="box" required>
        <select name="user_type" class="box">
          <option value="user">ผู้ใช้</option>
          <option value="admin">แอดมิน</option>
        </select>
        <input type="submit" name="submit" value="ลงทะเบียน" class="btn">
        <p>ผู้ใช้งานเคยลงทะเบียนแล้ว <a href="login.php">ลงชื่อเข้าสู่ระบบ</a> </p>
      </form>
    </div>
  </section>



</body>
</html>