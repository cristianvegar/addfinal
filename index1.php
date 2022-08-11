<?php
    if(isset($_POST))
    {
        echo "en post";
        $postdata = file_get_contents("php://input");
        echo $postdata;
    }
?>