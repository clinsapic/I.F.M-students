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
    <link  type="text/css" href="css/stylesheet.css"  rel="stylesheet">
    
  </head>
  <body>
    <fieldset>
      <legend>Update items</legend>

        <form class="" action="php_action/update.php" method="post">
      <table cellspacing ="0" cellpadding="0">
        <tr>
          <th id="lab">Aina Ya Kifaa</th>
          <td><input type="text" name="aina_kifaa" id="input" placeholder="ain ya kifaa" value="<?php echo $data['aina_kifaa'];?>" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Model</th>
        <td>  <select class="model" id="input" name="model" >
            <option value="<?php echo $data['model'];?>">Hp</option>
            <option value="<?php echo $data['model'];?>">Dell</option>
            <option value="<?php echo $data['model'];?>">Toshiba</option>
            <option value="<?php echo $data['model'];?>">Acer</option>
          </select></td>
        </tr>
        <tr>
          <th id="lab">Namba ya kifaa</th>
          <td><input type="text" name="num_kifaa" id="input" placeholder="number kifaa" value="<?php echo $data['num_kifaa'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Tarehe ya kununuliwa</th>
          <td><input type="date" name="date" id="input" placeholder="Tarehe ya kununuliwa" value="<?php echo $data['tarehe_buy'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Kinatumika</th>
        <td>  <select class="kinatumika" id="input" name="kinatumika">
            <option value="<?php echo $data['kinatumika'];?>">Ndio</option>
            <option value="<?php echo $data['kinatumika'];?>">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab">Kina kifaa cha kutunzia kumbu kumbuku</th>
        <td>  <select class="kifaa_serial" id="input" name="kifaa_serial">
            <option value="<?php echo $data['kifaa_serial'];?>">Ndio</option>
            <option value="<?php echo $data['kifaa_serial'];?>">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab">Kiliwahi kubadilishwa</th>
        <td>  <select class="badilisha" id="input" name="badilisha">
            <option value="<?php echo $data['badili_kifaa'];?>">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab">Aina ya HDD</th>
          <td><input type="text" name="hdd"  id="input" placeholder="Aina ya HDD" value="<?php echo $data['aina_hdd'];?>" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Aina ya HDD ya awali</th>
          <td><input type="text" name="hdd_awali" id="input" value="<?php echo $data['aina_hdd_awali'];?>"  placeholder="Aina ya HDD ya awali" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Serial Namba</th>
          <td><input type="text" name="serial_num" id="input" value="<?php echo $data['serial_num'];?>"  placeholder="serial_number" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Ime badilishwa lini</th>
          <td><input type="date" name="change_date" id="input" value="change_date" placeholder="ime badilishwa lini" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Imetunzwa wapi</th>
          <td><input type="text" name="storage" id="input" value="<?php echo $data['store'];?>"  placeholder="imetunzwa wapi" autocomplete="off"></td>
        </tr>
<tr>
  <input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <td><button type="submit" id="push" name="submit">Add Items</button></td>
  <td><a href="index.php"><button type="button" id="push" name="button">back</button></a></td>
</tr>
      </table>
    </fieldset>
  </form>

  </body>
</html>

<?php
}
?>
