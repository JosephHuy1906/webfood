<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "asm";
  $conn = new mysqli($servername, $username, $password, $dbname);
?>
<?php
 if(isset($_GET['id'])){
  $id= $_GET['id'];

}
?>
<?php
  $sql = "DELETE FROM douongcon WHERE id= $id";
  $query = $conn->query($sql);
  header("location: ../viewad/douongcon.php");
?>