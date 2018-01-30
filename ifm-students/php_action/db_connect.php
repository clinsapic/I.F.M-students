<?php

    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ifm_tool";

    //creawte connection_aborted
    $connect = new mysqli($localhost, $username, $password, $dbname);

    //cehck connection_aborted
    if($connect->connect_error) {
      die("connection failed to be stablish plz check your server configurations" . $connect->connect_error);
    }else {
    #  echo "succefully connected";
    }


 ?>
