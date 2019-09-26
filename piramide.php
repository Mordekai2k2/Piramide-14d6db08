<?php
echo "Le staple mucho?\n";
$staple = readline();
if (is_numeric($staple)) {
        for ($Lewb = 0; $Lewb < $staple; $Lewb++) {
            for($Yeet = 0; $Yeet <= $Lewb; $Yeet++ ) {
                echo "*";
            }
            echo "\n";
        }
}
else
{
    echo "Feck you reetkever", exit() ;
}