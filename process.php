<?php
session_start();
$mysqli=new mysqli('localhost','root','','web')or die(mysqli_error($mysqli));

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM activity WHERE id=$id")or die($mysqli->error());
    
      $_SESSION['message']="record has been Deleted";
      $_SESSION['msg_type']="danger";
      
      header("location: deleteactivity.php");
}
?>