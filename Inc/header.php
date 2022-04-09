<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nam An Market</title>
    <link rel="stylesheet" href="../css/indexx.css">

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
                        <form action="seach.php" id="tim" method="POST">
                            <div class="seach">
                                <input type="text" name="filter" placeholder="Tìm Kiếm sản phẩm">
                                <input id="timkiem" type="submit" name="timkiem" value="Tìm kiếm"></i>
                            </div>
                         
                        </form>
                       
                    </div>
                    <div class="cart">
                        <div class="nencart">
                            <a href="../view/cart.php">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
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

                    <?php
                         $servername = "localhost";
                         $username = "root";
                         $password = "";
                         $dbname = "asm";
                         $conn = new mysqli($servername, $username, $password, $dbname);
                         if ($conn == false) {
                            echo "error";
                        } else {

                            $query = "SELECT*FROM danhmuc";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                             while($row=$result->fetch_assoc()){
                                echo '
                                    <li><a href="'.$row['link'].'">'.$row['tendanhmuc'].'</a></li>
                                ';
                             
                             }
                        }
                        }
                    ?>
                </ul>
               </nav>
            </div>
            <div class="tabnho">
                <button><i class="fas fa-search"></i></button>
               <a href="../view/cart.php"> <button><i class="fas fa-cart-plus"></i></button></a>
                <a href="https://www.facebook.com/nqhuy1906"><button><i class="fab fa-facebook-f"></i></button></a>
            </div>
        </header>
        <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "asm";
   
     $conn = new mysqli($servername, $username, $password, $dbname);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["filter"];
            echo "<div class=main>";
            if($name == ""){

            }else{
               
                $query = "SELECT*FROM sanpham WHERE tensp LIKE '%$name%'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<h3>Kết quả tìm kiếm: ".$name."</h3>";
                    
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    <div class="traicay1">
                        <img src="../images/' . $row['hinh'] . '" alt="">
                        <h4>' . $row['tensp'] . '</h4>
                        <p>' . $row['gia'] . 'đ</p>
                        <div class="thongtinqua">
                            <p>Xuất xứ: <b>' . $row['xuatxu'] . '</b></p>
                            <p>Quy cách đóng gói: <b>' . $row['quycach'] . '</b></p>
                            <input class="themgiohang" type="submit" value="Thêm giỏ hàng"/>
                         </div>
                    </div>
                    ';
                    }
                }else{
                    echo "<h3>Không tìm Thấy Kết quả: ".$name." </h3>";
                }
            }
            echo "</div>";
        }
    ?>