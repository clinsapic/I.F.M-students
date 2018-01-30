<?php
    require_once 'php_action/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM  vifaa WHERE id ={$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();


    $connect->close();
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Remove</title>
  </head>
  <body>
    <h3>Do u want to delete?</h3>
    <form class="" action="php_action/remove.php" method="post">

      <input type="hidden" name="id" value="<?php echo $data['id'];?>">
      <button type="submit" name="button">delete record</button>
      <a href="index.php"><button type="button" name="button">back</button></a>
    </form>
  </body>
</html>
<?php
}
?>
