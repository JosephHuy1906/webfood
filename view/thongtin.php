<?php
    include "../Inc/header.php";
?>
<link rel="stylesheet" href="../css/thongtinn.css">
<div class="main">
    <main>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "asm";
            $conn = new mysqli($servername, $username, $password, $dbname);

            
        
            $query = "SELECT * FROM user";
            $result = $conn->query($query);
            if ($result->num_rows >0) {
    
                if ($row = $result->fetch_array()) {
                    echo '  <table class="bang">
                     <tr><h2 style="color:yellow;"> Xin Chào: '.$_SESSION['name'].'</h2></tr>
                     <tr><th colspan="2">Thông Tin Tài Khoản</td</tr>
                     <tr>
                            <th>Tên Đăng Nhập</th><br>
                            <th>Password</th><br>
                            
                     </tr>
                     <tr>
                        <td>'.$_SESSION['username'].'</td>
                        <td><input type=hidden value='.$row['password'].' /></td>
                     </tr>
                     <tr>
                     <td class="sub"><a href="thongtin_sub.php?page_layout=thongtin_sub&id='.$_SESSION['id'].'">Sửa</a></td>
                     <td class="sub"><a href="logout.php">Đăng Xuất</a></td>
                  </tr>
                    </table> ';
                    // echo '<div class="admin" ><a href="dangnhapadmin.php?page_layout=thongtin_sub&id='.$row['id'].'">Đăng nhập admin</a></div>';
                }
            } else {
                echo "0 results";
            }
               
            ?>
    </main>
</div>

</div>
<div class="indexShip"></div>
<?php
include "../Inc/footer.php";
?>