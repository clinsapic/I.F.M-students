<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD items</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <fieldset>
      <legend>Add items to records</legend>

        <form class="" action="php_action/create.php" method="post">
      <table cellspacing ="0" cellpadding="0">
        <tr>
          <th>Aina Ya Kifaa</th>
          <td><input type="text" name="aina_kifaa" placeholder="ain ya kifaa" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Model</th>
        <td>  <select class="model" name="model">
            <option value="Hp">Hp</option>
            <option value="Dell">Dell</option>
            <option value="Toshiba">Toshiba</option>
            <option value="acer">Acer</option>
          </select></td>
        </tr>
        <tr>
          <th>Number ya kifaa</th>
          <td><input type="text" name="num_kifaa" placeholder="number kifaa" autocomplete="off"></td>
        </tr>

        <tr>
          <th>tarehe ya kununuliwa</th>
          <td><input type="text" name="tarehe_buy" placeholder="Tarehe ya kununuliwa" autocomplete="off"></td>
        </tr>

        <tr>
          <th>kinatumika</th>
        <td>  <select class="kinatumika" name="kinatumika">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>kina kifaa cha kutunzia kumbu kumbuku</th>
        <td>  <select class="kifaa_serial" name="kifaa_serial">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>iliwahi kubadilishwa</th>
        <td>  <select class="badilisha" name="badilisha">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th>Ain ya HDD</th>
          <td><input type="text" name="hdd"  placeholder="Aina ya HDD" autocomplete="off"></td>
        </tr>

        <tr>
          <th>Ain ya HDD ya awali</th>
          <td><input type="text" name="hdd_awali"  placeholder="Aina ya HDD ya awali" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Serial Number</th>
          <td><input type="text" name="serial_num"  placeholder="serial_number" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Ime badilishwa lini</th>
          <td><input type="text" name="change_date"  placeholder="ime badilishwa lini" autocomplete="off"></td>
        </tr>
        <tr>
          <th>Imetunzwa wapi</th>
          <td><input type="text" name="storage"  placeholder="imetunzwa wapi" autocomplete="off"></td>
        </tr>
<tr>
  <td><button type="submit" name="submit">Add Items</button></td>
  <td><a href="index.php"><button type="button" name="button">back</button></a></td>
</tr>
      </table>
    </fieldset>
  </form>
  </body>
</html>
