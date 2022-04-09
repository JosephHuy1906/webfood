<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/viewad.css">
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

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }

                $sql_s = "SELECT*FROM haisan WHERE id = $id";
                $qr = $conn->query($sql_s);
                $rows = $qr->fetch_array();

                if (isset($_POST['sua'])) {
                    $tensp = $_POST['tensp'];

                    if ($_FILES['hinh']['name'] == '') {
                        $hinh = $rows['hinh'];
                    } else {
                        $hinh = $rows['hinh']['name'];
                        $hinh_tmp = $_FILES['hinh']['name_tpm'];
                        move_uploaded_file($hinh_tmp, 'images/' . $hinh);
                    }

                    $gia = $_POST['gia'];
                    $xuatxu = $_POST['xuatxu'];
                    $quycach = $_POST['quycach'];

                    if ($tensp != "" && $hinh != "" && $gia != "" && $xuatxu != "" && $quycach != "") {
                        $sql = "UPDATE  haisan SET tensp='$tensp', hinh='$hinh', gia='$gia', 
                         xuatxu='$xuatxu', quycach='$quycach' WHERE id=$id";
                        $query = $conn->query($sql);
                        header("location: ../viewad/haisan.php");
                    }
                }
                ?>

                <form action="" method="POST" class="sua" enctype="multipart/form-data">
                    <h2>Sửa sản phẩm</h2>
 
                    <input type="text" placeholder="Tên Sản Phẩm" name="tensp" required value="<?php echo $rows['tensp'] ?>"> <br>
                    <input type="text" placeholder="Giá Sản Phẩm" name="gia" required value="<?php echo $rows['gia'] ?>"><br> 
                    <input type="text" placeholder="Nơi Xuất Xứ" name="xuatxu" required value="<?php echo $rows['xuatxu'] ?>"> <br>
                    <input type="text" placeholder="Quy Cách Đóng Gói" name="quycach" required value="<?php echo $rows['quycach'] ?>"><br>
                    <input type="file" name="hinh" value="<?php echo $rows['hinh'] ?>"> <br>   
                    <input type="submit" value="Cập Nhập" name="sua">
                </form>

                <?php
                $conn->close();
                ?>

            </main>
        </div>
    </div>
</body>

</html>