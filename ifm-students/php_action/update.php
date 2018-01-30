<?php

require_once 'db_connect.php';

    if($_POST) {
      $aina_kifaa = $_POST['aina_kifaa'];
      $model = $_POST['model'];
      $num_kifaa = $_POST['num_kifaa'];
      $tarehe_buy = $_POST['date'];
      $kinatumika = $_POST['kinatumika'];
      $kifaa_serial = $_POST['kifaa_serial'];
      $badili_kifaa =$_POST['badilisha'];
      $aina_hdd = $_POST['hdd'];
      $aina_hdd_awali = $_POST['hdd_awali'];
      $serial_num = $_POST['serial_num'];
      $change_date = $_POST['change_date'];
      $store = $_POST['storage'];

      $id = $_POST['id'];

  $sql = "UPDATE vifaa SET aina_kifaa ='$aina_kifaa', model ='$model' , num_kifaa ='$num_kifaa' ,
  tarehe_buy ='$tarehe_buy', kinatumika = '$kinatumika', kifaa_serial ='$kifaa_serial',
  badili_kifaa = '$badili_kifaa', aina_hdd = '$aina_hdd' , aina_hdd_awali ='$aina_hdd_awali',
  serial_num ='$serial_num', change_date ='$change_date', store='$store' WHERE id={$id}";


if($connect->query($sql) ===TRUE) {
  echo "<p>succesfully updated</p>";
  echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
  echo "<a href='../index.php'><button type='button'>Home</button></a>";
}else{
  echo "Error while updating records" . $connect->error;
}

$connect->close();
}

?>
