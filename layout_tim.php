
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/seach.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
</head>

<body>
    <div class="admin">
    <header>
            <div class="tren">
          
            <h2>We come Admin</h2>
            <nav >
                <ul>
                    <li><a href="admin.php"><i class="fa-solid fa-house-user"></i> Trang Chủ</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-power-off"></i> Đăng Xuất</a></li>
                </ul>
            </nav>
            </div>
            <nav class="duoi">
            <ul>
                    <li class="title">
                        <h3>Admin Menu</h3>
                    </li>
                    <li class="chon"><a href="">Cấu Hình</a></li>
                    <li class="chon"><a href="sanpham.php">Sản Phẩm</a>
                        <ul class="sub_menu">
                            <li><a href="viewad/traicay.php">Trái Cây</a></li>
                            <li><a href="viewad/raucu.php">Rau Củ</a></li>
                            <li><a href="viewad/thucuong.php">Thức Uống</a></li>
                            <li><a href="viewad/giavi.php">Gia Vị</a></li>
                            <li><a href="viewad/thittrung.php">Thịt Trứng</a></li>
                            <li><a href="viewad/hangkho.php">Hàng Khô</a></li>
                            <li><a href="viewad/haisan.php">Hải Sản</a></li>
                            <li><a href="viewad/douongcon.php">Đồ Uống Có Cồn</a></li>
                            <li><a href="viewad/kembo.php">Kem Bơ</a></li>
                            <li><a href="viewad/phithucpham.php">Phi Thực Phẩm</a></li>
                        </ul>
                    </li>
                    <li class="chon"><a href="">Tin Tức</a></li>
                    <li class="chon"><a href="">Đơn Hàng</a></li>
                </ul>
            </nav>
        </header>
        <div class="main">
            <main>
                <?php
                    include "seach.php";
                ?>
                 
            </main>
            
        </div>
    </div>
    <?php
        $conn->close();
    ?>
</body>

</html>