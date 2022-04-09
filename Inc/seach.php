<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "asm";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if(isset($_POST['timkiem'])){
      $tukhoa=$_POST['tukhoa'];
  }

  $sql = "SELECT*FROM traicay WHERE traicay.tensp LIKE '%".$tukhoa."%'";
  $qr = $conn->query($sql);
 
?>
<h2>Từ khóa tìm kiếm: <?php $_POST['tukhoa']?></h2>
    <ul>
        <?php
               while ($row = $qr->fetch_assoc()) {
                echo '
            <div class="traicay1">
                <img src="../images/' . $row['hinh'] . '" alt="">
                <h4>' . $row['tensp'] . '</h4>
                <p>' . $row['gia'] . 'đ</p>
                <div class="thongtinqua">
                    <p>Xuất xứ: <b>' . $row['xuatxu'] . '</b></p>
                    <p>Quy cách đóng gói: <b>' . $row['quycach'] . '</b></p>
                    <button><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                 </div>
            </div>
            ';
            }
        ?>
    </ul>