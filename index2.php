<?php
$file = file_get_contents('./data.json', true);
$array = json_decode($file, true);
$totalCat = count($array);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />    
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
<form method="POST" action="res2.php" id="form1">
<?php
foreach ($array as $key => $value) {
    $id = $value['id'];
    $opts = $value['opts'];
    $txt1 = $opts['txt1'];
    $txt2 = $opts['txt2'];
    $txt3 = $opts['txt3'];
    $txt4 = $opts['txt4'];
    ?>
    <div class="cats">
        <label><?=$txt1?></label>
        <input name='nameopt-<?=$id?>' type="hidden" value='<?=$txt1?>'>
        <label>
            <input name="opt-<?=$id?>" class="chck" data-idcat="<?=$id?>" value="<?=$txt2?>" type="checkbox">
            <span class="label"><?=$txt2?></span>
        </label>
        <label>
            <input name="opt-<?=$id?>" class="chck" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
            <span class="label"><?=$txt3?></span>
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
                $txt4 = $value['txt4'];
                ?>
                <div class="subcats subcats-<?=$id?> <?= ($txt4 == 'true') ? 'subcatsActive' : '';?>" id="subcats-<?=$id?>">
                    <label><?=$txt1?></label>
                    <input name='namesub-<?=$id?>-sub<?=$key?>' type="hidden" value='<?=$txt1?>'>
                    <label>
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub" data-idcat="<?=$id?>" value="<?=$txt2?>" type="checkbox">
                        <span class="label"><?=$txt2?></span>
                    </label>
                    <label>
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
                        <span class="label"><?=$txt3?></span>
                    </label>
                    <label>
                        <input name="optsub-<?=$id?>-sub<?=$key?>" class="chcksub" data-idcat="<?=$id?>" value="<?=$txt3?>" type="checkbox">
                        <span class="label"><?=$txt3?></span>
                    </label>
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
<input type="submit" id="submitBtn" value="ENVIAR" >
</form>
</body>
<script src="index2.js"></script>
</html>