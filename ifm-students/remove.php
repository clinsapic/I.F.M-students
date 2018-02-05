<?php
    require_once 'php_action/db_connect.php';


  $strquery="DELETE from vifaa where id='".$_GET['id']."' ";
  $results=mysqli_query ($connect, $strquery) or die(mysqli_error($connect));


  header("index.php");

  mysqli_close($connect);
  
  echo "<p>succesfully Removed record</p>";
  echo "<a href='index.php'><button type='button'>Back</button></a>";

?>

