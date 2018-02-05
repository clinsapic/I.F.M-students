<?php

   require_once 'php_action/db_connect.php';

?>


<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Teknohama</title>

   <link  type="text/css" href="css/stylesheet.css"  rel="stylesheet">

    <style media="screen">
      .manageItem{
        width: 95%;
        margin: auto;
      }
      #tabody{
        width: 100%;
        margin-top: 35px;
      }

      #col{
        background-color: grey;
        width: 150px;
        height: 40px;
        margin: 0px;
        padding: 0px;
        text-align: center;
      }

    </style>
  </head>
  <body>

    <div class="manageItem">
      <a href="create.php"><button type="submit" name="button" id="push">Add Items</button></a>
      <table id="tabody" border="1" cellspacing="0" cellpadding ="0">
        <thead>
        <tr>
          <th id="col">Aina ya kifaa</th>
          <th id="col">Model</th>
          <th id="col">Namba ya kifaa</th>
          <th id="col">Tarehe ya kununuliwa</th>
          <th id="col">Kinatumika</th>
          <th id="col">Kifaa serial</th>
          <th id="col">Badili kifa</th>
          <th id="col">Aina ya hdd</th>
          <th id="col">Aina ya hdd ya awali</th>
          <th id="col">Serial ya Namba</th>
          <th id="col">Ime badilishwa lini</th>
          <th id="col">Imetunzwa wapi</th>
          <th style="width:170px;" id="col">Action</th>
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
                    <td>".$row['serial_num']."</td>
                    <td>".$row['change_date']."</td>
                    <td>".$row['store']."</td>
                    <td>
                    <span>
                      <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                    </span>
                    <span>
                       <a href='remove.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                    </span>
                     

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
