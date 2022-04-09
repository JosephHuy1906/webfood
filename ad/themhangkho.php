<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/viewad.css">
    <link rel="stylesheet" href="../css/batloi.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
</head>

<body>
    <div class="admin">
        <header>
            <div class="tren">

                <h2>We come Admin</h2>
                <nav>
                    <ul>
                        <li><a href="../admin.php"><i class="fa-solid fa-house-user"></i> Trang Chủ</a></li>
                        <li><a href="../logout.php"><i class="fa-solid fa-power-off"></i> Đăng Xuất</a></li>
                    </ul>
                </nav>
            </div>
            <nav class="duoi">
                <ul>
                    <li class="title">
                        <h3>Admin Menu</h3>
                    </li>
                    <li class="chon"><a href="../danhmuc.php">Danh Mục</a></li>
                    <li class="chon"><a href="../sanpham.php">Sản Phẩm</a>
                        <ul class="sub_menu">
                            <li><a href="../viewad/traicay.php">Rau Củ</a></li>
                            <li><a href="../viewad/raucu.php">Rau Củ</a></li>
                            <li><a href="../viewad/thucuong.php">Thức Uống</a></li>
                            <li><a href="../viewad/giavi.php">Gia Vị</a></li>
                            <li><a href="../viewad/thittrung.php">Thịt Trứng</a></li>
                            <li><a href="../viewad/hangkho.php">Hàng Khô</a></li>
                            <li><a href="../viewad/haisan.php">Hải Sản</a></li>
                            <li><a href="../viewad/douongcon.php">Đồ Uống Có Cồn</a></li>
                            <li><a href="../viewad/kembo.php">Kem Bơ</a></li>
                            <li><a href="../viewad/phithucpham.php">Phi Thực Phẩm</a></li>
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
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "asm";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if (isset($_POST['them'])) {
                    $tensp = $_POST['tensp'];
                    $hinh = $_FILES['hinh']['name'];
                    $hinh_tmp = $_FILES['hinh']['name_tpm'];
                    $gia = $_POST['gia'];
                    $xuatxu = $_POST['xuatxu'];
                    $quycach = $_POST['quycach'];

                    if ($tensp != "" && $hinh != "" && $gia != "" && $xuatxu != "" && $quycach != "") {
                        $sql = "INSERT INTO hangkho(tensp, hinh, gia, xuatxu, quycach) 
                        VALUES('$tensp','$hinh','$gia','$xuatxu','$quycach')";
                        $query = $conn->query($sql);
                        move_uploaded_file($hinh_tmp, 'images/' . $hinh);
                        header("location: ../viewad/hangkho.php");
                    }
                }
                ?>
                 <form action="" method="POST" class="sua" enctype="multipart/form-data" onsubmit="return KiemTra()">
                    <h2>Thêm sản phẩm</h2>

                    <input type="text" id="tensp" placeholder="Tên Sản Phẩm" name="tensp" require><br>
                    <div id="loi1" class="loi"></div>
                    <input type="text" id="gia" placeholder="Giá Sản Phẩm" name="gia" require><br>
                    <div id="loi2" class="loi"></div>
                    <input type="text" id="xuatxu" placeholder="Nơi Xuất Xứ" name="xuatxu" require><br>
                    <div id="loi3" class="loi"></div>
                    <input type="text" id="donggoi" placeholder="Quy Cách Đóng Gói" name="quycach" require><br>
                    <div id="loi4" class="loi"></div>
                    <input type="file" id="hinh" name="hinh">
                    <div id="loi5" class="loi"></div>
                    <input type="submit" value="Thêm Sản Phẩm" name="them">
                </form>
                <?php
                $conn->close();
                ?>

            </main>
        </div>
    </div>
</body>

</html>
<script src="../js/batloiadd.js"></script>