<?php

   require_once 'php_action/db_connect.php';

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teknohama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style media="screen">
      .manageItem{
        width: 90%;
        margin: auto;
      }
      table {
        width: 100%;
        margin-top: 30px;
      }
    </style>
  </head>
  <body>

    <div class="manageItem">
      <a href="create.php"><button type="submit"  class="btn btn-secondary" name="button">Add Items</button></a>
      <table  class="table  table-striped" width="90%">
        <thead>
        <tr>
          <th>Ain ya kifaa</th>
          <th>Model</th>
          <th>num_kifaa</th>
          <th>tarehe ya kununuliwa</th>
          <th>kinatumika</th>
          <th>kifaa_serial</th>
          <th>badili_kifa</th>
          <th>ain_hdd</th>
          <th>ain_hdd_awali</th>
          <!--<th>serial_num</th>
          <th>ime badilishwa lini</th>
          <th>imetunzwa wapi</th>-->
          <th style="width:150px;">action</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM vifaa WHERE active = 1 ";
          $result = $connect->query($sql);

          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo  "<tr>
                    <td>".$row['aina_kifaa']."</td>
                    <td>".$row['model']."</td>
                    <td>".$row['num_kifaa']."</td>
                    <td>".$row['tarehe_buy']."</td>
                    <td>".$row['kinatumika']."</td>
                    <td>".$row['kifaa_serial']."</td>
                    <td>".$row['badili_kifaa']."</td>
                    <td>".$row['aina_hdd']."</td>
                    <td>".$row['aina_hdd_awali']."</td>
                    <!--<td>".$row['serial_num']."</td>-->
                    <!--<td>".$row['change_date']."</td>-->
                   <!-- <td>".$row['store']."</td>-->
                    <td>
                     <a href='edit.php?id=".$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                     <a href='remove.php?id=".$row['id']."'><button class='btn btn-danger   table-striped btn-sm' type='button'>Delete</button></a>
                    </td>

              </tr>";
            }//else{
              //echo "<tr><td colspan='5'><center>No data Availble</center></td></tr>";
            //}
          }
          ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
