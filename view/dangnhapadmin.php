<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nam An Market</title>
    <link rel="stylesheet" href="../css/dangnhapad.css">
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
                    <div class="nencart"><a href=""><i class="fas fa-shopping-cart"></i></a></div>
                </div>

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
                session_start();
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "asm";


                $conn = new mysqli($servername, $username, $password, $dbname);
                if (isset($_POST['username']) && isset($_POST['password'])) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if(empty($username)){
                        header("Location: dangnhapadmin.php?error=Username and Password is required");
                        exit();
                    }else if(empty($password)){
                        header("Location: dangnhapadmin.php?error=Password is required");
                        exit();
                    }else{
                    $sql = "SELECT*FROM admin WHERE username='$username' AND password='$password'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        if ($_POST['username'] === $username && $_POST['password'] === $password) {
                            $_SESSION['username'] =  $username;
                            header('location: ../admin.php?page_layout=admin&id=' . $row['id'] . '');
                            exit();
                        }
                    } else {
                        header("Location: dangnhapadmin.php?error=Incorect User name of Password");
                        exit();
                    }
                }
                }

                ?>

                <form action="dangnhapadmin.php" method="POST" class="sua">
                    <h2>Đăng nhập trang admin</h2><br>
                    <?php
                    if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="">User name</label><br>
                    <input type="text" placeholder="User name" name="username"> <br><br>
                    <label for="">Password</label> <br>
                    <input type="password" placeholder="Password" name="password"><br> <br>
                    <input type="submit" value="Đăng Nhập" name="login">
                </form>


            </main>
        </div>

    </div>
    <div class="indexShip"></div>
    <?php
    include "../Inc/footer.php";
    ?>