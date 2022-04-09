<?php
session_start();
include "Inc/config.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($username)){
        header("Location: login.php?error=Username and Password is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT*FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if($result->num_rows >0){
           $row = $result -> fetch_assoc();
           if($row['username'] === $username && $row['password'] === $password){
              $_SESSION['username'] = $row['username'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
              $_SESSION['password'] = $row['password'];
              header("location: view/trangchu.php?page_layout=trangchu&id=".$row['id']."");
              exit();
           }
        }else{
            header("Location: login.php?error=Incorect User name of Password");
            exit();
        }
    } 
}else{
    header("Location: login.php");
}


?>