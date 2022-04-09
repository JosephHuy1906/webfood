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

                $sqls = "SELECT*FROM danhmuc WHERE id = $id";
                $qr = $conn->query($sqls);
                $rows = $qr->fetch_array();

                if (isset($_POST['sua'])) {
                    $tendm = $_POST['name'];
                    $link = $_POST['link'];

                    if ($tendm != "" && $link != "" ) {
                        $sql = "UPDATE  danhmuc SET tendanhmuc='$tendm', link='$link' WHERE id=$id";
                        $query = $conn->query($sql);
                        header("location: ../danhmuc.php");
                    }
                }
                $conn->close();
                ?>

                <form action="" method="POST" class="sua">
                    <h2>Sửa Danh Mục</h2><br>
                    <label for="">Tên Danh Mục</label><br>
                    <input type="text" placeholder="User name" name="name" required value="<?php echo $rows['tendanhmuc'] ?>"> <br><br>
                    <label for="">Đường link Danh Mục</label> <br>
                    <input type="text" placeholder="Link" name="link" required value="<?php echo $rows['link'] ?>"><br> <br>
                    <input type="submit" value="Cập Nhập" name="sua">
                </form>

            </main>
        </div>
    </div>
</body>

</html>