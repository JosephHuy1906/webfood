
<?php
    include "header.php";
?>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/login_in.css">
    <div class="main">
        <div class="login">
            <form action="register_submit.php" method="post">
                <h2>ĐĂNG KÝ</h2>
                <?php
                if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <input type="text" name="username" value="" required placeholder="User name">
                <input type="text" name="name" value="" required placeholder="Name">
                <input type="password" name="password" value="" required placeholder="Password" />
                <input type="password" name="repassword" value="" required placeholder="Nhập lại password" />
                <input type="submit" name="submit" value="Đăng Ký" />
                <input type="reset" name="reset" value="Làm mới" />
            </form>
            <div class="other">
                <h2>We come Back!</h2>
                <button><a href="login.php">Login</a></button>
            </div>
        </div>
    </div>
    </div>

<?php
include "footer.php";
?>