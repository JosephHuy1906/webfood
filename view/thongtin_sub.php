<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nam An Market</title>
    <link rel="stylesheet" href="../css/thongtin_sub.css">
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
                    <div class="cart"><div class="nencart"><a href=""><i class="fas fa-shopping-cart"></i></a></div></div>
                
                    <div class="hotline">
                         <p>Hotline: 0961022334</p>
                    </div>
                    <div class="dangnhap">
                        <a href="../view/thongtin.php"><i class="fa-solid fa-circle-user" style="font-size: 40px; color: green;margin-left: 20px; margin-top: 30px;"></i></a>
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

    $sqls = "SELECT*FROM user WHERE id = $id";
    $qr = $conn->query($sqls);
    $rows = $qr->fetch_array();
    
    if (isset($_POST['sua']) ) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];

        if($user != "" && $pass != "" && $name !=""){
            $sql = "UPDATE  user SET username='$user', password='$pass', name='$name' WHERE id=$id";
            $query = $conn->query($sql);
            header("location: trangchu.php");
        }    
    
    }
    $conn->close();
    ?>

<form action="" method="POST" class="sua">
        <h2>Sửa User</h2><br>
        <label for="">User name</label><br>
        <input type="text" placeholder="User name" name="user" required value="<?php echo $rows['username'] ?>"> <br><br>
        <label for="">Password</label> <br>
        <input type="password" placeholder="Password" name="pass" required value="<?php echo $rows['password'] ?>"><br> <br>
        <label for="">Họ và tên</label><br>
        <input type="text" placeholder="Họ và tên" name="name" required value="<?php echo $rows['name'] ?>"> <br><br>
        <input type="submit" value="Cập Nhập" name="sua">
    </form>


    </main>
</div>

</div>
<div class="indexShip"></div>
<?php
include "../Inc/footer.php";
?>