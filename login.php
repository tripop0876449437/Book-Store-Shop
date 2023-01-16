<?php
  include 'config.php';
  session_start();

  if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_type = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('การเชื่อมต่อล้มเหลว');

    if(mysqli_num_rows($select_type) > 0){
      $row = mysqli_fetch_array($select_type);

      if($row['user_type'] == 'admin'){
        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['admin_id'] = $row['id'];
        header('location:Back-end/admin.php');
      }else if($row['user_type' == 'user']){
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_id'] = $row['user_id'];
        header('location:Front-end/user.php');
      }else{
        $message[] = 'อีเมลหรือรหัสผ่านของคุณไม่ถูกต้อง!';
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
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>ลงชื่อเข้าสู่ระบบ</title>
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
    }
  ?>

  <!-- Login Section -->
  <section class="login">
    <div class="container">
      <form action="" method="post">
        <h3>ลงชื่อเข้าสู่ระบบ</h3>
        <input type="text" name="email" placeholder="ใส่อีเมลของคุณ!" class="box" required>
        <input type="password" name="password" placeholder="ใส่รหัสผ่านของคุณ!" class="box" required>
        <input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn">
        <p>ผู้ใช้งานยังไม่เคยลงทะเบียน <a href="register.php">ลงทะเบียนผู้ใช้งาน</a> </p>
      </form>
    </div>
  </section>
</body>
</html>