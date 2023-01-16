<?php
  $host = 'localhost'; $port = 3306; $id = 'root'; $password = ''; $database = 'book_shop';
  $conn = mysqli_connect($host,$id,$password,$database,$port) or die('การเชื่อมต่อล้มเหลว');
?>