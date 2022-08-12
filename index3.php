<?php
$file = file_get_contents('./data.json', true);
$array = json_decode($file, true);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>
<body>
<form method="POST" action="res3.php" id="form1">
<p>Seleccione una opción</p>
<select name="opt" id="selectOpts">
<option >Seleccione...</option>
<?php 
foreach ($array as $key => $value) {
    $id = $value['id'];
    $opts = $value['opts'];
    $txt1 = $opts['txt1'];
    ?>    
    <option value="<?=$txt1?>" data-idcat="<?=$id?>"><?=$txt1?></option>
    <?php
}
?>
</select>
<select name="sub" id="selectdata">
    <option value="">Seleccione...</option>
</select>
<input type="submit" id="submitBtn" value="ENVIAR" >
</form>
</body>
<script src="index3.js"></script>
</html>