<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "asm";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if(isset($_SESSION['name'])){
            unset($_SESSION['name']);
        }
        header("location: index.php");
?>