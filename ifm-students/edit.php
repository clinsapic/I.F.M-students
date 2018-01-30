<?php

require_once 'php_action/db_connect.php';

if($_GET['id']) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM vifaa WHERE id ={$id}";
  $result = $connect->query($sql);

  $data = $result->fetch_assoc();

  $connect->close();

  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update</title>

    <style media="screen">
      fieldset{
        margin: auto;
        margin-top: 100px;
        width: 60%;
      }
      table tr th{
        padding-top: 20px;

      }
    </style>
  </head>
  <body>
    <fieldset>
      <legend>update items</legend>

        <form class="" action="php_action/update.php" method="post">
      <table cellspacing ="0" cellpadding="0">
        <tr>
          <th>Aina Ya Kifaa</th>
          <td><input type="text" name="aina_kifaa" placeholder="aina ya kifaa" value="<?php echo $data['aina_kifaa'];?>" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Model</th>
        <td>  <select class="model" name="model" >
            <option value="<?php echo $data['model'];?>">Hp</option>
            <option value="<?php echo $data['model'];?>">Dell</option>
            <option value="<?php echo $data['model'];?>">Toshiba</option>
            <option value="<?php echo $data['model'];?>">Acer</option>
          </select></td>
        </tr>
        <tr>
          <th>Number ya kifaa</th>
          <td><input type="text" name="num_kifaa" placeholder="number kifaa" value="<?php echo $data['num_kifaa'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th>tarehe ya kununuliwa</th>
          <td><input type="text" name="date" placeholder="Tarehe ya kununuliwa" value="<?php echo $data['tarehe_buy'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th>kinatumika</th>
        <td>  <select class="kinatumika" name="kinatumika">
            <option value="<?php echo $data['kinatumika'];?>">Ndio</option>
            <option value="<?php echo $data['kinatumika'];?>">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>kina kifaa cha kutunzia kumbu kumbuku</th>
        <td>  <select class="kifaa_serial" name="kifaa_serial">
            <option value="<?php echo $data['kifaa_serial'];?>">Ndio</option>
            <option value="<?php echo $data['kifaa_serial'];?>">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>iliwahi kubadilishwa</th>
        <td>  <select class="badilisha" name="badilisha">
            <option value="<?php echo $data['badili_kifaa'];?>">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>Ain ya HDD</th>
          <td><input type="text" name="hdd"  placeholder="Aina ya HDD" value="<?php echo $data['aina_hdd'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th>Ain ya HDD ya awali</th>
          <td><input type="text" name="hdd_awali" value="<?php echo $data['aina_hdd_awali'];?>"  placeholder="Aina ya HDD ya awali" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Serial Number</th>
          <td><input type="text" name="serial_num" value="<?php echo $data['serial_num'];?>"  placeholder="serial_number" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Ime badilishwa lini</th>
          <td><input type="text" name="change_date" value="change_date" placeholder="ime badilishwa lini" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Imetunzwa wapi</th>
          <td><input type="text" name="storage" value="<?php echo $data['store'];?>"  placeholder="imetunzwa wapi" autocomplete="off"></td>
        </tr>
<tr>
  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <td><button type="submit" name="submit">Add Items</button></td>
  <td><a href="index.php"><button type="button" name="button">back</button></a></td>
</tr>
      </table>
    </fieldset>
  </form>

  </body>
</html>

<?php
}
?>
