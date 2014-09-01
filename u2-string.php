<?php
header('Content-Type: text/html; charset=utf-8');
    $namn1="Carl";
    $namn2="Jennifer Lawrence";
    
    echo $namn1 . " tar fina bilder på " . $namn2;
    
    $jenni = substr($namn2, 0, 8);
    
    if ($jenni=="Jennifer") {
   
    echo "<br>" . $jenni;
    }else{
        echo"Okaj";
    }
?>
