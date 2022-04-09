<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/viewad.css">
    <link rel="stylesheet" href="../css/ad_seach.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
</head>

<body>
    <div class="admin">
    <header>
            <div class="tren">
          
            <h2>We come Admin</h2>
            <nav >
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
                    <li class="chon"><a href="">Cấu Hình</a></li>
                    <li class="chon"><a href="../sanpham.php">Sản Phẩm</a>
                        <ul class="sub_menu">
                        <li><a href="traicay.php">Trái Cây</a></li>
                            <li><a href="raucu.php">Rau Củ</a></li>
                            <li><a href="thucuong.php">Thức Uống</a></li>
                            <li><a href="giavi.php">Gia Vị</a></li>
                            <li><a href="thittrung.php">Thịt Trứng</a></li>
                            <li><a href="hangkho.php">Hàng Khô</a></li>
                            <li><a href="haisan.php">Hải Sản</a></li>
                            <li><a href="douongcon.php">Đồ Uống Có Cồn</a></li>
                            <li><a href="kembo.php">Kem Bơ</a></li>
                            <li><a href="phithucpham.php">Phi Thực Phẩm</a></li>
                        </ul>
                    </li>
                    <li class="chon"><a href="">Tin Tức</a></li>
                    <li class="chon"><a href="">Đơn Hàng</a></li>
                </ul>
            </nav>
        </header>
        <div class="main">
            <main>
                <h2>Danh Sách Sản Phẩm</h2>
                <form action="layout_tim.php" id="tim" method="POST">
                            <div class="layout_tim">
                                <input type="text" name="tukhoa" placeholder="Tìm Kiếm sản phẩm">
                                <input id="timkiem" type="submit" name="timkiem" value="Tìm kiếm"></i>
                            </div>
                         
                        </form>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "asm";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn == false) {
                    echo "error";
                } else {
                    $limit=4;
                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                    }else{
                        $page = 1;
                    }
                    $start_from = ($page-1)*$limit;

                    $query = "SELECT*FROM thucuong ORDER BY id ASC limit $start_from, $limit";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                    echo "<table >";
                    echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
                    echo '
                        <tr>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        
                        <td class="them"> <a href="../ad/themthucuong.php"><i class="fa-solid fa-circle-plus"></i> Thêm</a> </td>
                        </tr>
                    ';
                    echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
                    echo '
                                 <tr>
                                    <th>ID</th>
                                    <th>HÌNH ẢNH</th>
                                    <th colspan="3">TÊN SẢN PHẨM</th>
                                    <th>GIÁ</th>
                                    <th>XUẤT XỨ</th>
                                    <th colspan="2">QUY CÁCH ĐÓNG GÓI</th>
                                    <th colspan="2"></th>
                                </tr>
                                ';
            
                   
                        while ($row = $result->fetch_assoc()) {
            
                            echo '
                                <tr>
                                    <td>'. $row['id'] .'</td>
                                    <td><img src="../images/' . $row['hinh'] . '" alt=""></td>
                                    <td colspan="3">' . $row['tensp'] . '</td>
                                    <td>' . $row['gia'] . 'đ</td>
                                    <td>' . $row['xuatxu'] . '</td>
                                    <td colspan="2">' . $row['quycach'] . '</td>
            
                                    <td class="ad"><a href="../ad/suathucuong.php?page_layout=sua&id=' . $row['id'] . '"> <i class="fa-solid fa-pen"></i> </a></td>
                                    <td class="ad"><a onclick="return Del()" href="../ad/xoathucuong.php?page_layout=xoa&id=' . $row['id'] . '"> <i class="fa-solid fa-trash"></i> </a></td>
                                </tr>
                                ';
                        }
                    }
 
                    echo "</table>";
                }
                ?>
                 
            </main>
            
        </div>
        <div class="chuyentrang" style="text-align: center;"> 
                    <?php
                        $qr = "SELECT *FROM thucuong";
                        $ret=$conn->query($qr);
                        $total = $ret->num_rows;
                        if($total%$limit != 0){
                            $paper = (int)$total/$limit+1;
                        }else{
                            $paper = (int)$total/$limit;
                        }
                        echo "<div class=page>";
                        for($i=1; $i<=$paper; $i++){
                            echo "<div class=trang>
                            <a href=thucuong.php?page=".$i.">$i<a/>
                            </div>";
                        }
                        echo "</div>";
                     ?>
                 </div>
                 </div>
    </div>
    <?php
        $conn->close();
    ?>
</body>

</html>
<script src="../js/xoa.js"></script>