<?php
    for ($i=1; $i <=11;  $i++) { 
        $hasil = 5 * $i;

        if (strpos($hasil, '0') === false) {
            echo "5 x $i = $hasil <br>" ;    
        }  
    }
?>