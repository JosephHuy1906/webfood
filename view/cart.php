<?php
include "../Inc/config.php";
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

if(isset($_GET['delid']) && ($_GET['delid']>=0)){
    array_splice($_SESSION['giohang'],$_GET['delid'],1);
}
    if (isset($_POST['addcart'])) {
        $hinh = $_POST['hinh'];
        $ten = $_POST['tensp'];
        $gia = $_POST['gia'];
        $sp = [$hinh, $ten, $gia];
        $_SESSION['giohang'][] = $sp;
    }

function showcart()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $tong = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $tong += $_SESSION['giohang'][$i][2];
            echo '
                        <tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img src="../images/' . $_SESSION['giohang'][$i][0] . '" alt=""></td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td>' . $_SESSION['giohang'][$i][2] . '</td>
                            <td><a href="cart.php?delid='.$i.'"><i class="fa-solid fa-trash"></i> </a></td>
                        </tr>
                ';
        }
        echo '
                    <tr>
                        <th colspan="4">Tổng Tiển </th>
                        <th class="tong">' . $tong . ' VNĐ</th>
                    </tr>
        ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nam An Market</title>
    <link rel="stylesheet" href="../css/dangnhapad.css">
    <link rel="stylesheet" href="../css/cartt.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script src="../js/kiemtra.js"></script>

</head>

<body>

    <div class="wapper">
        <header>
            <div class="header_top">
                <div class="logo">
                    <a href="trangchu.php"><img src="../images/logoFooter-removebg-preview.png" alt=""></a>
                </div>
                <div class="seachbox">
                    <form action="">
                        <div class="seach">
                            <input type="search" placeholder="Tìm Kiếm sản phẩm, thương hiệu hay nhãn hàng bạn muốn...">
                        </div>

                    </form>
                    <span><button><i class="fas fa-search"></i></button></i></span>
                </div>
                <div class="cart">
                    <div class="nencart"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></div>
                </div>

                <div class="hotline">
                    <p>Hotline: 0961022334</p>
                </div>
                <div class="dangnhap">
                <?php
                            if(isset($_SESSION['name'])){
                              echo '<a href="../view/thongtin.php"><i class="fa-solid fa-circle-user" style="font-size: 40px; color: green;margin-left: 20px; margin-top: 30px;"></i></a>';
                            }else{
                                echo '<a href="../login.php"><i class="fa-solid fa-circle-user" style="font-size: 40px; color: green;margin-left: 20px; margin-top: 30px;"></i></a>';
                            }
                        ?>
                </div>

            </div>
            <div class="header_menu">
                <div id="toggle"><i class="fas fa-bars"></i></div>
                <nav>
                    <ul>
                        <li><a href="traicay.php">TRÁI CÂY</a></li>
                        <li><a href="raucu.php">RAU CỦ</a></li>
                        <li><a href="thucuong.php">THỨC UỐNG</a></li>
                        <li><a href="giavi.php">GIA VỊ</a></li>
                        <li><a href="thittrung.php">THỊT & TRỨNG</a></li>
                        <li><a href="hangkho.php">HÀNG KHÔ</a></li>
                        <li><a href="haisan.php">HẢI SẢN</a></li>
                        <li><a href="douongcon.php">ĐỒ UỐNG CỒN</a></li>
                        <li><a href="kembo.php">KEM, BƠ</a></li>
                        <li><a href="phithucpham.php">PHI THỰ PHẨM</a></li>
                    </ul>
                </nav>
            </div>
            <div class="tabnho">
                <button><i class="fas fa-search"></i></button>
                <button><i class="fas fa-cart-plus"></i></button>
                <button><i class="fab fa-facebook-f"></i></button>
            </div>
        </header>
        <div class="container">
            <h2>Giỏ hàng của bạn</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình Sản phẩm</th>
                    <th>Tên Sản phẩm</th>
                    <th>Giá Sản phẩm</th>
                    <th></th>
                </tr>
                <?php showcart(); ?>

            </table>
            <div class="set">
                <a href="traicay.php"><button>Tiếp Tục đặt hàng</button></a>
            </div>
        </div>
        

    </div>
    <div class="indexShip"></div>
    <?php
    include "../Inc/footer.php";
    ?>