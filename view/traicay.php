<link rel="stylesheet" href="../css/traicay.css">
<?php
include "../Inc/header.php";
?>
<div class="container">
    <div class="container_img">
        <div id="slideshow">
            <div class="slide-wrapper">
                <div class="slide"><img src="../images/banner.jpg"></div>
                <div class="slide"><img src="../images/banner1.png"></div>
            </div>
        </div>
        <div class="img">
            <img src="../images/banner-right-2.png" alt="">
            <img src="../images/banner-right-5.png" alt="">
            <img src="../images/banner-right-10.png" alt="">
        </div>
    </div>
</div>
<div class="menumain">
    <ul>
        <li><a href="trangchu.php">TRANG CHỦ /</a></li>
        <li><a href="">SẢN PHẨM /</a></li>
        <li><a href="traicay.php">TRÁI CÂY</a></li>
    </ul>
</div>
<div class="main">
    <aside>
        <div class="asidemenutop">
            <ul>
                <li><a href="#">Trái Cây Tươi</a></li>
                <li><a href="#">Trái Cây Khô</a></li>
                <li><a href="#">Trái Cây Đông Lạnh</a></li>
            </ul>
        </div>
        <div class="asidemenubottom">
            <ul>
                <li><a href="traicay.php" class="khung1">TRÁI CÂY</a></li>
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
        </div>
    </aside>
    <main>
        <div class="tieudetrang">
            <h3>TRÁI CÂY</h3>
            <div class="menutieudetrang">
                <ul>
                    <li><a href=""><i class="fas fa-star-half-alt"></i>Mới</a>|</li>
                    <li><a href=""><i class="fas fa-gift"></i>Khuyến Mãi</a>|</li>
                    <li><a href=""><i class="fas fa-leaf"></i>Thực Phẩm Chay</a></li>
                </ul>
                <br>
                <hr>
            </div>
        </div>
        <div class="sanphamtraicay">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "asm";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn == false) {
                echo "error";
            } else {
                $limit = 8;
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $limit;
                $query = "SELECT*FROM traicay ORDER BY id ASC limit $start_from, $limit";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {


                    while ($row = $result->fetch_assoc()) {
                        echo '
                    <div class="traicay1">
                        <form method = "POST" action = "cart.php">
                            <img src="../images/' . $row['hinh'] . '" alt="">
                            <h4>' . $row['tensp'] . '</h4>
                            <p>' . $row['gia'] . 'đ</p>
                            <div class="thongtinqua">
                                <p>Xuất xứ: <b>' . $row['xuatxu'] . '</b></p>
                                <p>Quy cách đóng gói: <b>' . $row['quycach'] . '</b></p>
                                <input type="hidden" name="hinh" value="'.$row['hinh'].'"/>
                                <input type="hidden" name="tensp" value="'.$row['tensp'].'"/>
                                <input type="hidden" name="soluong" value="1" min="1" max="10"/>
                                <input type="hidden" name="gia" value="'.$row['gia'].'"/>
                                <input class="themgiohang" type="submit" name="addcart" value="Thêm giỏ hàng"/>
                            </div>
                        </form>
                    </div>
                    ';
                    }
                }
            }
            ?>
        </div>
        <div class="chuyentrang" style="text-align: center;">
                <?php
                $qr = "SELECT *FROM traicay";
                $ret = $conn->query($qr);
                $total = $ret->num_rows;
                if ($total % $limit != 0) {
                    $paper = (int)$total / $limit + 1;
                } else {
                    $paper = (int)$total / $limit;
                }
                echo "<div class=page>";
                for ($i = 1; $i <= $paper; $i++) {
                    echo "<div class=trang>
                                        <a href=traicay.php?page=" . $i . ">$i<a/>
                                        </div>";
                }
                echo "</div>";
                ?>
        </div>
    </main>
</div>
    
</div>
<div class="indexShip"></div>
<?php
include "../Inc/footer.php";
?>