<?php
$file = file_get_contents('./data.json', true);
$array = json_decode($file, true);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MicroProyecto Especial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>
<body>
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="./index1.html">Generar JSON de preguntas</a>
        <a class="py-2 d-none d-md-inline-block" href="./index2.php">Preguntas generadas a partir de JSON</a>
      </div>
    </nav>
<form method="POST" action="res3.php" id="form1">
<p>Seleccione una opción</p>
<select class="dropdown" name="opt" id="selectOpts">
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
<input type="submit" id="submitBtn" class="btn btn-warning btn-lg" value="ENVIAR" >
</form>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Funcionamiento</h1>
      <p class="lead font-weight-normal">Esta página consume el archivo data.json alojado en la raiz del proyecto, y populado manualmente con el JSON generado de las preguntas</p>
      <p class="lead font-weight-normal">Al dar click en enviar, encontrará las respuestas ingresadas como respuesta en una nueva página, como se solicitó en el documento</p>
      <p class="lead font-weight-normal">Aquí unicamente encontrará la categoria y la subcategoria, y su respuesta al dar click en enviar</p>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>
  <div>
    <img src="./Dropdown.PNG" class="img-fluid" alt="Ejemplo">
  </div>
</body>
<script src="index3.js"></script>
</html>