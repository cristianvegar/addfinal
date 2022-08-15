<?php
$file = file_get_contents('./data.json', true);
$array = json_decode($file, true);
$totalCat = count($array);
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
    <style>
        .cats {
            margin: 20px 0px 0px 0px;
        }
        .subcats{
            display: none;
            margin: 10px 0px 0px 10px;
        }
        .subcatsActive{
            display: block !important;
        }
    </style>
  </head>
<body>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="./index1.html">Generar JSON de preguntas</a>
        <a class="py-2 d-none d-md-inline-block" href="./index3.php">Dropdown generado a partir de JSON</a>
      </div>
    </nav>
<form class="row g-3" method="POST" action="res2.php" id="form1">
<?php
foreach ($array as $key => $value) {
    $id = $value['id'];
    $opts = $value['opts'];
    $txt1 = $opts['txt1'];
    $txt2 = $opts['txt2'];
    $txt2 = strtolower($txt2);
    $txt3 = $opts['txt3'];
    $txt4 = $opts['txt4'];
    $txt4 = strtolower($txt4);
    ?>
    <div class="offset-4 cats col-4">
        <label class="form-check-label"><?=$txt1?></label>
        <input name='nameopt-<?=$id?>' class="form-check-input" type="hidden" value='<?=$txt1?>'>
        <label class="form-check-label">
            <input name="opt-<?=$id?>" class="chck form-check-input" data-idcat="<?=$id?>" value="<?=$txt2?>" type="checkbox" <?= ($txt4 == 'true' && $txt2 == 'si') ? 'checked' : '';?>>
            <span class="label"><?=$txt2?></span>
        </label>
        <label>
            <input name="opt-<?=$id?>" class="chck form-check-input" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
            <span class="label form-check-label"><?=$txt3?></span>
        </label>
    </div>
    <?php
        $subcat = $value['subCats'];
        $totalSub = count($subcat);
        if (!empty($subcat)){
            foreach ($subcat as $key => $value) {
                $txt1 = $value['txt1'];
                $txt2 = $value['txt2'];
                $txt3 = $value['txt3'];
                ?>
                <div class="subcats subcats-<?=$id?> <?= ($txt4 == 'true') ? 'subcatsActive' : '';?>" id="subcats-<?=$id?>">
                    <label class="form-check-label"><?=$txt1?></label>
                    <input class="form-check-input" name='namesub-<?=$id?>-sub<?=$key?>' type="hidden" value='<?=$txt1?>'>
                    <label class="form-check-label">
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub form-check-input" data-idcat="<?=$id?>" value="<?=$txt2?>" type="checkbox" >
                        <span class="label"><?=$txt2?></span>
                    </label>
                    <label class="form-check-label">
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub form-check-input" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
                        <span class="label"><?=$txt3?></span>
                    </label>
                    <!-- <label>
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
                        <span class="label"><?=$txt3?></span>
                    </label> -->
                    <input type="hidden" name='totalsub-<?=$id?>' value='<?=$totalSub?>'>
                </div>
            <?php
            }
        }
    ?>
    
    <?php
    
}
?>
<input type="hidden" name="totalCat" value="<?=$totalCat?>">
<input type="submit" class="btn btn-warning btn-lg" id="submitBtn" value="ENVIAR" >
</form>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Funcionamiento</h1>
      <p class="lead font-weight-normal">Esta página consume el archivo data.json alojado en la raiz del proyecto, y populado manualmente con el JSON generado de las preguntas</p>
      <p class="lead font-weight-normal">Al dar click en enviar, encontrará las respuestas ingresadas como respuesta en una nueva página, como se solicitó en el documento</p>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>
  <div>
    <img src="./PreguntasGeneradas.PNG" class="img-fluid" alt="Ejemplo">
  </div>
</body>
<script src="index2.js"></script>
</html>