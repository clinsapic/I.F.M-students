<?php
require_once 'db_connect.php';


if($_POST) {
  $id = $_POST['id'];

  $sql = "UPDATE vifaa SET active = 2 WHERE id = {$id}";
  if($connect->query($sql)=== TRUE){
    echo "<p>succesfully Removed record</p>";
    echo "<a href='../index.php'><button type='button'>Back</button></a>";
  }else {
    echo "Error updating records::" .$connect->error;
  }
  $connect->close();
}



?>
