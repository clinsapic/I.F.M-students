<?php


require_once 'db_connect.php';

    if($_POST) {
      $aina_kifaa = $_POST['aina_kifaa'];
      $model = $_POST['model'];
      $num_kifaa = $_POST['num_kifaa'];
      $tarehe_buy = date("Y-m-d H:i:s");
      $kinatumika = $_POST['kinatumika'];
      $kifaa_serial = $_POST['kifaa_serial'];
      $badili_kifaa =$_POST['badilisha'];
      $aina_hdd = $_POST['hdd'];
      $aina_hdd_awali = $_POST['hdd_awali'];
      $serial_num = $_POST['serial_num'];
      $change_date = date("Y-m-d H:i:s");
      $store = $_POST['storage'];

        $sql = "INSERT INTO vifaa (aina_kifaa,model,num_kifaa,tarehe_buy,kinatumika,kifaa_serial,
          badili_kifaa,aina_hdd,aina_hdd_awali,serial_num,change_date,store,active) VALUES
          ('$aina_kifaa','$model','$num_kifaa','$tarehe_buy','$kinatumika','$kifaa_serial',
            '$badili_kifaa','$aina_hdd','$aina_hdd_awali','$serial_num','$change_date','$store',1)";

            if($connect->query($sql) === TRUE) {
              echo "<p>New record added</p>";
              echo "<a href='../create.php'><button type='button'>back</button></a>";
              echo "<a href='../index.php'><button type='button'>home</button></a>";
            }else {
              echo "Error" .$sql. '' . $connect->connect_error;
            }
              $connect->close();
    }


?>
