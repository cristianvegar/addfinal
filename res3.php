<?php
if(isset($_POST))
{
    $opt = $_POST['opt'];
    $sub = $_POST['sub'];
    echo $opt.' = '.$sub;
}
?>