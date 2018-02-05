<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD items</title>

    <link  type="text/css" href="css/stylesheet.css"  rel="stylesheet">

    <style type="text/css">
      
  
          }

    </style>


  </head>
  <body>
    <fieldset >
      <legend>Add items to records</legend>

        <form class="" action="php_action/create.php" method="post">
      <table cellspacing ="1" cellpadding="1">
        <tr>
          <th id="lab">Aina Ya Kifaa</th>
          <td><input type="text" id="input" name="aina_kifaa" placeholder="ain ya kifaa" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Model</th>
        <td>  <select class="model" id="input"  name="model">
            <option value="Hp">Hp</option>
            <option value="Dell">Dell</option>
            <option value="Toshiba">Toshiba</option>
            <option value="acer">Acer</option>
          </select></td>
        </tr>
        <tr>
          <th id="lab">Namba ya kifaa</th>
          <td><input type="text" name="num_kifaa" id="input" placeholder="number kifaa" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Tarehe ya kununuliwa</th>
          <td><input type="date" name="date" id="input" placeholder="Tarehe ya kununuliwa" value="2017-06-01" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Kinatumika</th>
        <td>  <select class="kinatumika" id="input" name="kinatumika">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab">kina kifaa cha kutunzia kumbu kumbuku</th>
        <td>  <select class="kifaa_serial" id="input" name="kifaa_serial">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab" >Kiliwahi kubadilishwa</th>
        <td>  <select class="badilisha" id="input" name="badilisha">
            <option value="ndio">Ndio</option>
            <option value="hapana">Hapana</option>
          </select></td>
        </tr>

        <tr>
          <th id="lab">Aina ya HDD</th>
          <td><input type="text" name="hdd" id="input"  placeholder="Aina ya HDD" autocomplete="off"></td>
        </tr>

        <tr>
          <th id="lab">Aina ya HDD ya awali</th>
          <td><input type="text" name="hdd_awali" id="input"  placeholder="Aina ya HDD ya awali" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Serial Number</th>
          <td><input type="text" name="serial_num" id="input"  placeholder="serial_number" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Ime badilishwa lini</th>
          <td><input type="date" name="change_date" id="input"  value="2017-06-01" placeholder="ime badilishwa lini" autocomplete="off"></td>
        </tr>
        <tr>
          <th id="lab">Imetunzwa wapi</th>
          <td><input type="text" name="storage" id="input"  placeholder="imetunzwa wapi" autocomplete="off"></td>
        </tr>
<tr>
  <td><button type="submit" name="submit" id="push" style="">Add Items</button></td>
  <td><a href="index.php"><button type="button" id="push" name="button">Back</button></a></td>
</tr>
      </table>
    </fieldset>
  </form>
  </body>
</html>
