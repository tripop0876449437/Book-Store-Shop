<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/navbar.css">
  <link rel="stylesheet" href="../CSS/product.css">
    <link rel="stylesheet" href="../CSS/footer.css">
  <title>อัพเดรตสินค้า</title>
</head>
<body>
  
  <!-- Header Product Section -->
  <?php include '../section/header.php'; ?>

  <!-- Content Product Section 1  -->
  <section class="product">
    <div class="container">
      <h3>สินค้า</h3>
      <form action="" method="post">
        <h3>อัพเดรตสินค้า</h3>
        <div class="box-row-p">
          <div class="box-p">
            <p>ชื่อผลิตภัณฑ์</p>
            <input type="text" name="nameProduct" placeholder="ใส่ชื่อผลิตภัณฑ์" required class="box-p-input">
          </div>
          <div class="box-p">
            <p>รูปภาพ</p>
            <input type="text" name="nameProduct" placeholder="ใส่รูปภาพ" required class="box-p-input">
          </div>
        </div>
        <div class="box-row-p">
          <div class="box-p">
            <p>ราคาผลิตภัณฑ์</p>
            <input type="number" name="nameProduct" placeholder="ใส่ราคาผลิตภัณฑ์" required class="box-p-input">
          </div>
          <div class="box-p">
            <p>จำนวนผลิตภัณฑ์</p>
            <input type="number" name="nameProduct" placeholder="ใส่จำนวนผลิตภัณฑ์" required class="box-p-input">
          </div>
        </div>
        <div class="box-row">
          <div class="box-p-btn">
            <input type="submit" value="อัพเดรต">
          </div>
          <div class="box-p-btn">
            <input type="reset" value="รีเซ็ต">
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- Content Product Section 2  -->
  <section class="showUpdate">
    <div class="showUpdate-navbar"></div>
    <div class="container">
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
      <div class="sUd-box">
        <div class="sUd-img"></div>
        <h3>ชื่อหนังสือ</h3>
        <h3>ราคา xxx</h3>
        <h3>จำนวน xx</h3>
        <div class="sUd-btn">
          <input type="button" value="แก้ไข">
          <input type="button" value="ลบ">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Product Section -->
  <?php include '../section/footer.php'; ?>


</body>
</html>