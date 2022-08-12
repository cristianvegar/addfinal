<?php
if(isset($_POST))
{
    $total = $_POST['totalCat'];
    for ($i=1; $i <= $total; $i++) { 
        $cat = $_POST['nameopt-'.$i];
        $optcat = $_POST['opt-'.$i];
        echo $i.'. '.$cat.' = '.$optcat;
        echo '<br>';
        if(isset($_POST['totalsub-'.$i])){
            $cantSub = $_POST['totalsub-'.$i];
            for ($a=0; $a < $cantSub; $a++) { 
                $currOp = $a + 1;
                $sub = $_POST['namesub-'.$i.'-sub'.$a];
                $optsub = $_POST['optsub-'.$i.'-sub'.$a];
                echo $i.'-'.$currOp.'. '.$sub.' = '.$optsub;
                echo '<br>';
            }
        }
    }

}
?>