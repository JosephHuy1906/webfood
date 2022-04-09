<?php
include 'Inc/config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
 if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['name'] != '' && $_POST['password'] != '' && $_POST['repassword'] != ''){
     $username = $_POST['username'];
     $name = $_POST['name'];
     $password = $_POST['password'];
     $repassword = $_POST['repassword'];
     if($password != $repassword){
         header('location: register.php');
     }
     $sql = "SELECT * FROM user WHERE username='$username' ";
     $old = mysqli_query($conn,$sql);
     if(mysqli_num_rows($old)>0){
        header('location: register.php');
     }
     $sql = "INSERT INTO user (username,password,name) VALUES('$username','$password','$name')";
     mysqli_query($conn,$sql);
     header('location: index.php');
 }else{
    header('location: register.php');
 }
}
$conn->close();
?>