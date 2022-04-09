<?php
    include "header.php";
?>
    <link rel="stylesheet" href="css/login_in.css">

<div class="main">
        <div class="login">
            <form action="login_submit.php" method="post">
                <h2>ĐĂNG NHẬP</h2>
                <?php
                if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="text" name="username" placeholder="User Name"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <button type="submit" name="login" class="dangnhap">Login</button>

                <div class="phuongthuc">
                    <a href="">
                        <button class="face"><i class="fa-brands fa-facebook-f"></i> Sign In</button>
                    </a>
                    <a href="">
                        <button class="gool"><i class="fa-brands fa-google"></i> Sign In width Google</button>
                    </a>
                </div>
            </form>
            <div class="other">
                <h2>We come Back!</h2>
                <p>Đăng ký tài khoản ở đây</p>
                <button><a href="register.php">Đăng ký tài khoản</a></button>
            </div>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>