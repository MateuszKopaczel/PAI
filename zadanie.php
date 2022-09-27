<?php

for($wys=1; $wys<=5; $wys++) {

    for($szer=1; $szer<=4; $szer++) {
        if($wys==1 || $wys==5) {
            echo "*";
        }
        elseif($szer==1 || $szer==4) {
            echo "*";
        }
        else {
            echo "_";
        }
        
    }
    echo "<br>";
}



?>