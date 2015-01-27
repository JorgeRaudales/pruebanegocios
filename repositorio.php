<?php
$msg = "";
$txt1 = "";

//isset: esta establecida?
if(isset($_POST["btn1"])){
  $txt1 = $_POST["txt1"];
  $msg ="Buenas noches $txt1";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>ejercicio 1 php repositorio</title>
</head>
  <body>
    <form action="repositorio.php" method="POST">
      <label for="txt1">Nombre</label>
      <input type="text" id="txt1" name="txt1" />
      <br/>
      <input type="submit" name="btn1" value="procesar"/>
      </form>
      <div class="msg">
        <?php echo $msg; ?>
      </div>
    </body>
</html>
